let url = "https://my.jasminsoftware.com";
let tenant = "224816";
let organization = "224816-0001";
let token = "";

let grantType = "client_credentials";
let clientId = "FEUP-SINF-S"
let clientSecret = "155c857c-00d5-4a43-a92e-3a0e155f3030";
let application = "application";

function getToken() {
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://identity.primaverabss.com/connect/token",
		"method": "POST",
		"headers": {
			"Content-Type": "application/x-www-form-urlencoded",
			"Accept": "*/*",
		},
		"data": {
			"grant_type": "client_credentials",
			"client_id": clientId,
			"client_secret": clientSecret,
			"scope": application
		}
	}

	$.ajax(settings).done(function (response) {
		token = response.token_type + " " + response.access_token;
		console.log("Get Token Response:");
		console.log(response);
	});
}

function getWarehouses() {
	var settings = {
		"async": true,
		"crossDomain": true,
		"url": url + "/api/" + tenant + "/" + organization + "/materialscore/warehouses",
		"method": "GET",
		"headers": {
			"Content-Type": "application/x-www-form-urlencoded",
			"Accept": "*/*",
			"Authorization": token
		},
		"data": {
			"grant_type": "client_credentials",
			"client_id": clientId,
			"client_secret": clientSecret,
			"scope": application
		}
	}

	$.ajax(settings).done(function (response) {
		console.log("Get Warehouses Response:");
		console.log(response);
	});
}