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
			<p>Returns data about trains coming into a particular station. It is required to give a station name or code, it will return an error if there is none. </p>
			<h5>Parameters</h5>
			<p>"?name=" station name, valid names for the stations can be called from the get stations call. Names are case-insensitive. It will also accept the station code as the name parameter.</p>
			<p>"?minutes=" number of minutes to return data for, must be an integer between 5 and 90 or it will return an error. </p>
			<ul class="collapsible popout">
				<li>
					<div class="collapsible-header">Valid Station Names</div>
					<div class="collapsible-body">
						<table class="highlight">
							<thead>
							<tr>
								<th>Station Name</th>
								<th>Station Code</th>
							</tr>
							</thead>
							<tbody>
							<tr><td>Belfast Central</td><td>BFSTC</td></tr>
							<tr><td>Lisburn</td><td>LBURN</td></tr>
							<tr><td>Lurgan</td><td>LURGN</td></tr>
							<tr><td>Portadown</td><td>PDOWN</td></tr>
							<tr><td>Sligo</td><td>SLIGO</td></tr>
							<tr><td>Newry</td><td>NEWRY</td></tr>
							<tr><td>Collooney</td><td>COLNY</td></tr>
							<tr><td>Ballina</td><td>BALNA</td></tr>
							<tr><td>Ballymote</td><td>BMOTE</td></tr>
							<tr><td>Dundalk</td><td>DDALK</td></tr>
							<tr><td>Foxford</td><td>FXFRD</td></tr>
							<tr><td>Boyle</td><td>BOYLE</td></tr>
							<tr><td>Carrick on Shannon</td><td>CKOSH</td></tr>
							<tr><td>Dromod</td><td>DRMOD</td></tr>
							<tr><td>Castlebar</td><td>CLBAR</td></tr>
							<tr><td>Manulla Junction</td><td>MNLAJ</td></tr>
							<tr><td>Westport</td><td>WPORT</td></tr>
							<tr><td>Ballyhaunis</td><td>BYHNS</td></tr>
							<tr><td>Castlerea</td><td>CSREA</td></tr>
							<tr><td>Longford</td><td>LFORD</td></tr>
							<tr><td>Claremorris</td><td>CLMRS</td></tr>
							<tr><td>Drogheda</td><td>DGHDA</td></tr>
							<tr><td>Edgeworthstown</td><td>ETOWN</td></tr>
							<tr><td>Laytown</td><td>LTOWN</td></tr>
							<tr><td>Gormanston</td><td>GSTON</td></tr>
							<tr><td>Roscommon</td><td>RSCMN</td></tr>
							<tr><td>Balbriggan</td><td>BBRGN</td></tr>
							<tr><td>Skerries</td><td>SKRES</td></tr>
							<tr><td>Mullingar</td><td>MLGAR</td></tr>
							<tr><td>Rush and Lusk</td><td>RLUSK</td></tr>
							<tr><td>Donabate</td><td>DBATE</td></tr>
							<tr><td>Malahide</td><td>MHIDE</td></tr>
							<tr><td>M3 Parkway</td><td>M3WAY</td></tr>
							<tr><td>Athlone</td><td>ATLNE</td></tr>
							<tr><td>Dunboyne</td><td>DBYNE</td></tr>
							<tr><td>Portmarnock</td><td>PMNCK</td></tr>
							<tr><td>Enfield</td><td>ENFLD</td></tr>
							<tr><td>Kilcock</td><td>KCOCK</td></tr>
							<tr><td>Clongriffin</td><td>GRGRD</td></tr>
							<tr><td>Sutton</td><td>SUTTN</td></tr>
							<tr><td>Bayside</td><td>BYSDE</td></tr>
							<tr><td>Howth Junction</td><td>HWTHJ</td></tr>
							<tr><td>Howth</td><td>HOWTH</td></tr>
							<tr><td>Kilbarrack</td><td>KBRCK</td></tr>
							<tr><td>Hansfield</td><td>HAFLD</td></tr>
							<tr><td>Clonsilla</td><td>CLSLA</td></tr>
							<tr><td>Castleknock</td><td>CNOCK</td></tr>
							<tr><td>Raheny</td><td>RAHNY</td></tr>
							<tr><td>Harmonstown</td><td>HTOWN</td></tr>
							<tr><td>Maynooth</td><td>MYNTH</td></tr>
							<tr><td>Navan Road Parkway</td><td>PHNPK</td></tr>
							<tr><td>Coolmine</td><td>CMINE</td></tr>
							<tr><td>Ashtown</td><td>ASHTN</td></tr>
							<tr><td>Leixlip (Confey)</td><td>LXCON</td></tr>
							<tr><td>Killester</td><td>KLSTR</td></tr>
							<tr><td>Broombridge</td><td>BBRDG</td></tr>
							<tr><td>Leixlip (Louisa Bridge)</td><td>LXLSA</td></tr>
							<tr><td>Drumcondra</td><td>DCDRA</td></tr>
							<tr><td>Clontarf Road</td><td>CTARF</td></tr>
							<tr><td>Dublin Connolly</td><td>CNLLY</td></tr>
							<tr><td>Docklands</td><td>DCKLS</td></tr>
							<tr><td>Tara Street</td><td>TARA</td></tr>
							<tr><td>Dublin Heuston</td><td>HSTON</td></tr>
							<tr><td>Dublin Pearse</td><td>PERSE</td></tr>
							<tr><td>Woodlawn</td><td>WLAWN</td></tr>
							<tr><td>Grand Canal Dock</td><td>GCDK</td></tr>
							<tr><td>Clara</td><td>CLARA</td></tr>
							<tr><td>Ballinasloe</td><td>BSLOE</td></tr>
							<tr><td>Adamstown</td><td>ADAMS</td></tr>
							<tr><td>Adamstown</td><td>ADAMF</td></tr>
							<tr><td>Adamstown</td><td>ADMTN</td></tr>
							<tr><td>Lansdowne Road</td><td>LDWNE</td></tr>
							<tr><td>Cherry Orchard</td><td>CHORC</td></tr>
							<tr><td>Cherry Orchard</td><td>PWESF</td></tr>
							<tr><td>PARK WEST</td><td>PWESS</td></tr>
							<tr><td>Clondalkin</td><td>CLONS</td></tr>
							<tr><td>Clondalkin</td><td>CLONF</td></tr>
							<tr><td>Clondalkin</td><td>CLDKN</td></tr>
							<tr><td>Sandymount</td><td>SMONT</td></tr>
							<tr><td>Hazelhatch</td><td>HZLCH</td></tr>
							<tr><td>Hazelhatch</td><td>HAZEF</td></tr>
							<tr><td>Hazelhatch</td><td>HAZES</td></tr>
							<tr><td>Attymon</td><td>ATMON</td></tr>
							<tr><td>Sydney Parade</td><td>SIDNY</td></tr>
							<tr><td>Booterstown</td><td>BTSTN</td></tr>
							<tr><td>Blackrock</td><td>BROCK</td></tr>
							<tr><td>Athenry</td><td>ATHRY</td></tr>
							<tr><td>Seapoint</td><td>SEAPT</td></tr>
							<tr><td>Salthill</td><td>SHILL</td></tr>
							<tr><td>Dun Laoghaire</td><td>DLERY</td></tr>
							<tr><td>Sandycove</td><td>SCOVE</td></tr>
							<tr><td>Glenageary</td><td>GLGRY</td></tr>
							<tr><td>Dalkey</td><td>DLKEY</td></tr>
							<tr><td>Oranmore</td><td>ORNMR</td></tr>
							<tr><td>Galway</td><td>GALWY</td></tr>
							<tr><td>Tullamore</td><td>TMORE</td></tr>
							<tr><td>Killiney</td><td>KILNY</td></tr>
							<tr><td>Sallins</td><td>SALNS</td></tr>
							<tr><td>Shankill</td><td>SKILL</td></tr>
							<tr><td>Craughwell</td><td>CRGHW</td></tr>
							<tr><td>Woodbrook</td><td>WBROK</td></tr>
							<tr><td>Bray</td><td>BRAY</td></tr>
							<tr><td>Newbridge</td><td>NBRGE</td></tr>
							<tr><td>Curragh</td><td>CURAH</td></tr>
							<tr><td>Kildare</td><td>KDARE</td></tr>
							<tr><td>Ardrahan</td><td>ARHAN</td></tr>
							<tr><td>Portarlington</td><td>PTRTN</td></tr>
							<tr><td>Monasterevin</td><td>MONVN</td></tr>
							<tr><td>Greystones</td><td>GSTNS</td></tr>
							<tr><td>Kilcoole</td><td>KCOOL</td></tr>
							<tr><td>Gort</td><td>GORT</td></tr>
							<tr><td>Portlaoise</td><td>PTLSE</td></tr>
							<tr><td>Athy</td><td>ATHY</td></tr>
							<tr><td>Wicklow</td><td>WLOW</td></tr>
							<tr><td>Roscrea</td><td>RCREA</td></tr>
							<tr><td>Cloughjordan</td><td>CJRDN</td></tr>
							<tr><td>Rathdrum</td><td>RDRUM</td></tr>
							<tr><td>Ballybrophy</td><td>BBRHY</td></tr>
							<tr><td>Nenagh</td><td>NNAGH</td></tr>
							<tr><td>Carlow</td><td>CRLOW</td></tr>
							<tr><td>Ennis</td><td>ENNIS</td></tr>
							<tr><td>Arklow</td><td>ARKLW</td></tr>
							<tr><td>Templemore</td><td>TPMOR</td></tr>
							<tr><td>Birdhill</td><td>BHILL</td></tr>
							<tr><td>Sixmilebridge</td><td>SXMBR</td></tr>
							<tr><td>Castleconnell</td><td>CCONL</td></tr>
							<tr><td>Muine Bheag</td><td>MNEBG</td></tr>
							<tr><td>Thurles</td><td>THRLS</td></tr>
							<tr><td>Gorey</td><td>GOREY</td></tr>
							<tr><td>Limerick</td><td>LMRCK</td></tr>
							<tr><td>Kilkenny</td><td>KKNNY</td></tr>
							<tr><td>Thomastown</td><td>THTWN</td></tr>
							<tr><td>Enniscorthy</td><td>ECRTY</td></tr>
							<tr><td>Limerick Junction</td><td>LMRKJ</td></tr>
							<tr><td>Tipperary</td><td>TIPRY</td></tr>
							<tr><td>Cahir</td><td>CAHIR</td></tr>
							<tr><td>Clonmel</td><td>CLMEL</td></tr>
							<tr><td>Carrick on Suir</td><td>CKOSR</td></tr>
							<tr><td>Charleville</td><td>CVILL</td></tr>
							<tr><td>Wexford</td><td>WXFRD</td></tr>
							<tr><td>Campile</td><td>CPILE</td></tr>
							<tr><td>Ballycullane</td><td>BCLAN</td></tr>
							<tr><td>Rosslare Strand</td><td>RLSTD</td></tr>
							<tr><td>Tralee</td><td>TRLEE</td></tr>
							<tr><td>Wellingtonbridge</td><td>WBDGE</td></tr>
							<tr><td>Waterford</td><td>WFORD</td></tr>
							<tr><td>Rosslare Europort</td><td>RLEPT</td></tr>
							<tr><td>Bridgetown</td><td>BRGTN</td></tr>
							<tr><td>Farranfore</td><td>FFORE</td></tr>
							<tr><td>Mallow</td><td>MLLOW</td></tr>
							<tr><td>Banteer</td><td>BTEER</td></tr>
							<tr><td>Rathmore</td><td>RMORE</td></tr>
							<tr><td>Millstreet</td><td>MLSRT</td></tr>
							<tr><td>Killarney</td><td>KLRNY</td></tr>
							<tr><td>Midleton</td><td>MDLTN</td></tr>
							<tr><td>Carrigtwohill</td><td>CGTWL</td></tr>
							<tr><td>Glounthaune</td><td>GHANE</td></tr>
							<tr><td>LittleIsland</td><td>LSLND</td></tr>
							<tr><td>Cork</td><td>CORK</td></tr>
							<tr><td>Fota</td><td>FOTA</td></tr>
							<tr><td>Carrigaloe</td><td>CGLOE</td></tr>
							<tr><td>Rushbrooke</td><td>RBROK</td></tr>
							<tr><td>Cobh</td><td>COBH</td></tr>
							<tr><td>CITY JUNCTION</td><td>CITYJ</td></tr>
							<tr><td>CENTRAL JUNCTION</td><td>CENTJ</td></tr>
							<tr><td>DUNMURRAY</td><td>DUNMR</td></tr>
							<tr><td>MOIRA</td><td>MOIRA</td></tr>
							</tbody>
						</table>
					</div>
				</li>

			</ul>

			<h6>Example</h6>
			<p>Returns all trains coming into Portmarnock in the next 30 minutes.</p>
			<blockquote>
				<a href="https://rail.danshub.online/api/getStation?name=Portmarnock&minutes=30" target="_blank">https://rail.danshub.online/api/getStation?name=Portmarnock&minutes=30</a>
			</blockquote>
		</div>
		<hr>
	</section>
</article>

