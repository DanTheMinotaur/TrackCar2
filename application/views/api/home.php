<article class="container">
	<section class="flow-text">
		<h1>Irish Rail REST API</h1>
		<p>Welcome to the RESTfull Irish Rail API. This project takes the public SOAP Irish Rail API and converts it
		to a more modern one. You can find the original API <a href="http://api.irishrail.ie/realtime/" target="_blank">here.</a></p>
		<h2>How it works</h2>
		<p>The application works by calling the Irish Rail API and converting it's XML results into the desired format and returning them via this API.</p>
	</section>
	<section class="flow-text">
		<h2>API Reference</h2>
		<p>When using this API you can use your browser to to access it or an API test application like Postman. You can use the API like the example here. </p>

		<h3>Return Types</h3>
		<p>The API can return several different data types, the default return type is JSON. You can change the return type with the parameter <span>?format=json</span> The other types that are available are: </p>
		<ul class="collection">
			<li class="collection-item">JSON<span class="secondary-content">format=json</span></li>
			<li class="collection-item">XML<span class="secondary-content">format=xml</span></li>
			<li class="collection-item">JSONP<span class="secondary-content">format=jsonp</span></li>
			<li class="collection-item">PHP Array<span class="secondary-content">format=php</span></li>
			<li class="collection-item">Serialized<span class="secondary-content">format=serialized</span></li>
		</ul>
		<h3>Example</h3>
		<p>Here is an example of using the API it will return all stations that are serviced by the Dart and returns the data in XML.</p>
		<blockquote>
			<a href="https://rail.danshub.online/api/allStations?type=dart&format=xml" target="_blank">https://rail.danshub.online/api/allStations?type=dart&format=xml</a>
		</blockquote>
	</section>
	<section>
		<h3>Available API Methods</h3>
		<div>
			<h4>Get Stations Data</h4>
			<p>Returns all stations available. </p>
			<blockquote>
				<a href="https://rail.danshub.online/api/allStations" target="_blank">https://rail.danshub.online/api/allStations</a>
			</blockquote>
			<h5>Parameters</h5>
			<p>"?type=" train type, the valid types are listed below and are case-insensitive.</p>
			<ul class="collection">
				<li class="collection-item">Dart</li>
				<li class="collection-item">Mainland</li>
				<li class="collection-item">Suburban</li>
				<li class="collection-item">All</li>
			</ul>
			<h6>Example</h6>
			<p>Returns all suburban stations</p>
			<blockquote>
				<a href="https://rail.danshub.online/api/allStations?type=Suburban" target="_blank">https://rail.danshub.online/api/allStations?type=Suburban</a>
			</blockquote>
		</div>
		<hr>
		<div>
			<h4>Get Train Data</h4>
			<p>Returns all currently running trains. </p>
			<blockquote>
				<a href="https://rail.danshub.online/api/getTrains" target="_blank">https://rail.danshub.online/api/getTrains</a>
			</blockquote>
			<h5>Parameters</h5>
			<p>"?type=" train type, the valid types are listed below and are case-insensitive.</p>
			<ul class="collection">
				<li class="collection-item">Dart</li>
				<li class="collection-item">Mainland</li>
				<li class="collection-item">Suburban</li>
				<li class="collection-item">All</li>
			</ul>
			<h6>Example</h6>
			<p>Returns all dart trains currently running </p>
			<blockquote>
				<a href="https://rail.danshub.online/api/getTrains?type=dart" target="_blank">https://rail.danshub.online/api/getTrains?type=dart</a>
			</blockquote>
		</div>
		<hr>
		<div>
			<h4>Get Station Data</h4>
			<p>Returns data about trains coming into a particular station. It is required to give a station name or will return an error. </p>
			<h5>Parameters</h5>
			<p>"?name=" station name, valid names for the stations can be called from the get stations call. Names are case-insensitive. </p>
			<p>"?minutes=" number of minutes to return data for, must be an integer between 5 and 90 or it will return an error. </p>

			<h6>Example</h6>
			<p>Returns all trains coming into Portmarnock in the next 30 minutes.</p>
			<blockquote>
				<a href="https://rail.danshub.online/api/getStation?name=Portmarnock&minutes=30" target="_blank">https://rail.danshub.online/api/getStation?name=Portmarnock&minutes=30</a>
			</blockquote>
		</div>
		<hr>
	</section>
</article>
<aside></aside>
