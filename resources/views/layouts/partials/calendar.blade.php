
@section('calendar')

		<div id="example">
		<br>
		<div class="shadow">
			<b>Click en el calendario para añadir nuevo evento en el calendario</b>
		</div>
		<br>
		<br>
		<div id="toolbar" class="ui-widget-header ui-corner-all">
			<button id="BtnPreviousMonth">Mes Anterio</button>
			<button id="BtnNextMonth">Mes Siguiente</button>
			&nbsp;&nbsp;&nbsp;
			Fecha: <input type="text" id="dateSelect" size="20"/>
			&nbsp;&nbsp;&nbsp;
			<button id="BtnDeleteAll">Borrar Todo</button>
		</div>

		<br>
		<div id="mycal"></div>

		</div>

		<!-- debugging-->
		<div id="calDebug"></div>

		<!-- Add event modal form -->
		<div id="add-event-form" title="Add New Event">
			<p class="validateTips">Todos los campos son requeridos</p>
			<form>
			<fieldset>
				<label for="name">Evento</label>
				<input type="text" name="what" id="what" class="text ui-widget-content ui-corner-all">
				<table>
					<tr>
						<td>
							<label>Inicio Fecha</label>
							<input type="text" name="startDate" id="startDate" value="" class="text ui-widget-content ui-corner-all">				
						</td>
						<td>&nbsp;</td>
						<td>
							<label>Inicio Horas</label>
							<select id="startHour" class="text ui-widget-content ui-corner-all">
								<option value="12" SELECTED>12</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
							</select>				
						<td>
						<td>
							<label>Inicio Minutos</label>
							<select id="startMin" class="text ui-widget-content ui-corner-all">
								<option value="00" SELECTED>00</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
							</select>				
						<td>
						<td>
							<label>AM/PM</label>
							<select id="startMeridiem" class="text ui-widget-content ui-corner-all">
								<option value="AM" SELECTED>AM</option>
								<option value="PM">PM</option>
							</select>				
						</td>
					</tr>
					<tr>
						<td>
							<label>Fin Fecha</label>
							<input type="text" name="endDate" id="endDate" value="" class="text ui-widget-content ui-corner-all"/>				
						</td>
						<td>&nbsp;</td>
						<td>
							<label>Fecha Hora</label>
							<select id="endHour" class="text ui-widget-content ui-corner-all">
								<option value="12" SELECTED>12</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
							</select>				
						<td>
						<td>
							<label>Fin Minutos</label>
							<select id="endMin" class="text ui-widget-content ui-corner-all">
								<option value="00" SELECTED>00</option>
								<option value="10">10</option>
								<option value="20">20</option>
								<option value="30">30</option>
								<option value="40">40</option>
								<option value="50">50</option>
							</select>				
						<td>
						<td>
							<label>AM/PM</label>
							<select id="endMeridiem" class="text ui-widget-content ui-corner-all">
								<option value="AM" SELECTED>AM</option>
								<option value="PM">PM</option>
							</select>				
						</td>				
					</tr>			
				</table>
				<table>
					<tr>
						<td>
							<label>Color de Fondo</label>
						</td>
						<td>
							<div id="colorSelectorBackground"></div>
							<input type="hidden" id="colorBackground" value="#333333">
						</td>
						<td>&nbsp;&nbsp;&nbsp;</td>
						<td>
							<label>Color de Texto</label>
						</td>
						<td>
							<div id="colorSelectorForeground"></div>
							<input type="hidden" id="colorForeground" value="#ffffff">
						</td>						
					</tr>				
				</table>
			</fieldset>
			</form>
		</div>
		
		<div id="display-event-form" title="View Agenda Item"></div>		
		<p>&nbsp;</p>
@endsection		