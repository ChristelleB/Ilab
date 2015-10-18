var timeOut;
$(document).ready(function(){
	var router = new Router();
	router.init(function(){
		$pathname=$(location).attr("pathname");
		$pathname = $pathname.replace("/borne", "");
		clearTimeout(timeOut);
		switch($pathname){
			case"":
			case"/":
			case"/index":
			case"/index.php":
			case"/index.html":
				$pathname="home";
				break;
		}
		loadContent($pathname);
	}); // end of Router init

});



function loadContent(vw){
	var dataVw = vw.replace('/', '');
	$actualView = $("*[data-vw].current");
	$newView = $('*[data-vw="'+ dataVw +'"]');
	$actualView.fadeOut('slow', function() {
		$newView.fadeIn('400').addClass('current');
	}).removeClass('current');

	if(dataVw == "step2"){
		step2();
	}
}


function step2(){
	timeOut = setTimeout(function(){
		var router = new Router();
		router.navigate("/borne");
	}, 3000);
}



// ROUTER 

var $body, path, params, _onChange, _history = [], pushState = window.history.pushState !== undefined;

function Router(defaultCallback) {
	this._defaultCallback = defaultCallback || function() {
	};
	this._routes = [];
}

Router.prototype.init = function(onChange) {
	_onChange = onChange;
	
	// first init
	this.setState();
	_onChange(path, params);

	if($body == undefined) {
		$body = $('body');
		$body.unbind().click(function(){ this.onClick(); }.bind(this));

		if(pushState) {
			var route = this.setState();
			window.history.replaceState(
				route,
				null,
				route
			);

			window.onpopstate = function(event) {
				event = event || window.event;
				if(event.state !== null) {
					event.preventDefault();
					event.stopPropagation();
					this.setState();
					_onChange(path, params);
				}
			}.bind(this);
		}else{
			var route = this.setState();
			if(window.location.hash != '#'+route) {
				window.location.hash = route;
			}else {
				_onChange(path, params);
			}
			window.onhashchange = function() {
				this.setState();
				_onChange(path, params);
			};
		}
	}
}

Router.prototype.navigate = function(route) {
	var route = this.setRoute(route);
	if(pushState){
		window.history.pushState(route, null, route);
		_onChange(path, params);
	}else{
		window.location.hash = route;
	}
}

Router.prototype.getRoute = function() {
	var route = '/';
	route += path.join('/');

	if(params) {
		queryString = '';

		for(var p in params) {
			queryString += '&'+p+'='+params[p];
		}

		route += '?'+queryString.substring(1);
	}
	return route;
}

Router.prototype.onClick = function(event){
	event = event || window.event;
	if (event.ctrlKey || event.metaKey || event.shiftKey || event.which == 2 || event.button == 2) return;
	
	var node = event.target || event.srcElement;
	while(node && node != $body) {
        if(node.nodeName.toUpperCase() == 'A') {
			break;
		}
		node = node.parentNode;
	}

	if(node && node != $body) {
		var location = window.location,
			origin = String(location.protocol) + '//' + String(location.host),
			href = node.getAttribute('href').replace(origin, '');

		if( node.target == '_blank' ||
			node.target == '_self' ||
			node.hasAttribute('download') ||
			node.hasAttribute('disabled') ||
			$(node).hasClass('disabled') ||
			href.indexOf('mailto') != -1 ||
			href.indexOf('tel:') != -1 ||
			href.indexOf('http') != -1 ){
				return;
		}else{
			event.preventDefault();
			event.stopPropagation();
			this.navigate(href);
		}
	}
}

Router.prototype.setState = function() {
	var location = window.location,
		origin = String(location.protocol) + '//' + String(location.host),
		href = String(location.href);
	
	if(href.indexOf('#') == -1) {
		href = href.substring(origin.length);
	}else{
		href = href.substring(href.indexOf('#')+1);
	}
	return this.setRoute('/'+href);
}

Router.prototype.setRoute = function(href) {
	href = href.split('?');
	if(href[0].charAt(0) == '/') {
		path = href[0].split('/');
		while(path[0] == '') path.shift();
	}else{
		var append = href[0].split('/');
		while(append[0] == '') append.shift();

		path.pop();
		path = path.concat(append);
	}

	if(href.length > 1) {
		params = {};
		var arr = href[1].split('&');
		while(arr.length>0) {
			var param = arr.shift().split('=');
			params[param[0]] = param[1];
		}
	}else{
		params = undefined;
	}
	return this.getRoute();
}

Router.prototype.addRoute = function(route, callback) {
	var slugs = route.split('/');

	if(slugs[0] == '') slugs.shift();
	if(slugs[slugs.length-1] == '') slugs.pop();

	var i, t = slugs.length;
	var path = [];
	for(i = 0; i<t; i++) {
		var slug = slugs[i];

		if(isProperty = slug.charAt(0) == ':') slug = slug.substr(1);

		path.push({
			isProperty: isProperty,
			pattern: new RegExp(slug == '*'?'.*':'\\b'+slug+'\\b', 'g')
		})
	}

	this._routes.push({
		path: path,
		callback: callback
	});
}

Router.prototype.removeRoute = function(route) {
	var i = this._routes.length;

	while(--i>-1) {
		if(this._routes[i].route == route) {
			this._routes.splice(i, 1);
		}
	}
}