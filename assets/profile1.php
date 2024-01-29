
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="/online/profile" method="post" id="user-data-form" enctype="multipart/form-data">
					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Información Personal </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="name">
											<i class="fa"></i>
											Nombre completo <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="Javier Bendezu" autocomplete="off" autocorrect="off" autocapitalize="none" required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="email">
											<i class="fa"></i>
											Correo <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" value="1@gmail.com" required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="phone">
											<i class="fa"></i>
											Su Teléfono </label>
										<input type="tel" class="form-control" name="phone" id="phone" placeholder="Su Teléfono" value="">
										<p class="help-block">Ingrese su teléfono completo, con el código del país.</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="password">
											<i class="fa"></i>
											Contraseña

										</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
										<p class="help-block">Por favor, utilice una <span class="relative-time" data-toggle="tooltip" data-placement="bottom" title="Mezcle letras mayúsculas y minúsculas, números y puntuación">contraseña fuerte</span>, con un mínimo de 8 caracteres.<br>Deje los campos em blanco para no alterar la contraseña.</p>
									</div>
									<div class="form-group">
										<label class="control-label" for="password_confirmation">
											<i class="fa"></i>
											Repita la contraseña

										</label>
										<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repita la contraseña">
									</div>
									<div class="form-group">
										<label class="control-label">
											Imagen de Perfil </label>
										<input type="file" name="avatar">
										<div class="input-group">
											<input type="text" readonly="" class="form-control" placeholder="Envíe una imagen en el formato .PNG, .JPG, .GIF de 150 x 150 pixeles.">
											<span class="input-group-btn input-group-sm">
												<button type="button" class="btn btn-fa btn-round btn-default">
													<i class="fas fa-upload"></i>
												</button>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="document">
											<i class="fa"></i>
											Documento </label>
										<input type="text" class="form-control" name="document" id="document" placeholder="Documento" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="linkedin">
											<i class="fa"></i>
											Su página de LinkedIn </label>
										<input type="url" class="form-control" name="linkedin" id="linkedin" placeholder="https://www.linkedin.com/&hellip;" value="">
										<p class="help-block">Copie y pegue la <strong>dirección</strong> de su página de LinkedIn aquí.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Localización </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="birth_country_id">
											<i class="fa"></i>
											País de Nacimiento </label>
										<select class="form-control" name="birth_country_id" id="birth_country_id">
											<option value="">(Seleccione)</option>


											<option value="9">Argentina</option>


											<option value="2">Brasil</option>


											<option value="1">Chile</option>


											<option value="4">Estados Unidos</option>


											<option value="3">Perú</option>


											<option value="20">Colombia</option>


											<option value="104">México</option>


											<option value="107">Ecuador</option>


											<option value="">(Otro)</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label" for="current_country_id">
											<i class="fa"></i>
											País Actual <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<select class="form-control" name="current_country_id" id="current_country_id" required="required">
											<option value="">(Seleccione)</option>


											<option value="9">Argentina</option>


											<option value="2">Brasil</option>


											<option value="1">Chile</option>


											<option value="4">Estados Unidos</option>


											<option value="3" selected="selected">Perú</option>


											<option value="20">Colombia</option>


											<option value="104">México</option>


											<option value="107">Ecuador</option>


										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_countries">
											<i class="fa"></i>
											Países Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>
										<select class="form-control" name="user_countries[]" id="user_countries" multiple="multiple" style="height: 144px;">


											<option value="9">Argentina</option>


											<option value="2">Brasil</option>


											<option value="1">Chile</option>


											<option value="4">Estados Unidos</option>


											<option value="3" selected="selected">Perú</option>


											<option value="20">Colombia</option>


											<option value="104">México</option>


											<option value="107">Ecuador</option>


										</select>
										<p class="help-block">Seleccione varios países utilizando <code>Ctrl</code> o <code>Shift</code> en el teclado.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Educación </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="education">
											<i class="fa"></i>
											Formación (Curso Superior)
										</label>
										<input type="text" name="education" id="education" class="form-control" value="" maxlength="255">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="institution">
											<i class="fa"></i>
											Universidad </label>
										<input type="text" name="institution" id="institution" class="form-control" value="" maxlength="255">
									</div>
								</div>
							</div>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_en">
										<i class="fa"></i>
										Nivel de idioma: English </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[en]" value="none" id="language_en">
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[en]" value="basic">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[en]" value="intermediate">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[en]" value="advanced">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[en]" value="fluent">
											Fluido </label>
									</div>
								</div>
							</div>


							<hr>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_es">
										<i class="fa"></i>
										Nivel de idioma: Español </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[es]" value="none" id="language_es">
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[es]" value="basic">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[es]" value="intermediate">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[es]" value="advanced">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[es]" value="fluent">
											Fluido </label>
									</div>
								</div>
							</div>


							<hr>


							<div class="row">
								<div class="col-md-2">
									<label class="control-label" for="language_pt">
										<i class="fa"></i>
										Nivel de idioma: Português </label>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[pt]" value="none" id="language_pt">
											Ninguno </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[pt]" value="basic">
											Básico </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[pt]" value="intermediate">
											Mediano </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[pt]" value="advanced">
											Avanzado </label>
									</div>
								</div>
								<div class="col-md-2">
									<div class="radio">
										<label>
											<input type="radio" name="languages[pt]" value="fluent">
											Fluido </label>
									</div>
								</div>
							</div>


						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Informaciones Profesionales </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="experience">
											<i class="fa"></i>
											Años de Experiencia </label>
										<select name="experience" id="experience" class="form-control">
											<option value="0">Menos de 1 año</option>
											<option value="1">1 año</option>


											<option value="2">
												2 años </option>


											<option value="3">
												3 años </option>


											<option value="4">
												4 años </option>


											<option value="5">
												5 años </option>


											<option value="6">
												6 años </option>


											<option value="7">
												7 años </option>


											<option value="8">
												8 años </option>


											<option value="9">
												9 años </option>


											<option value="10">
												10 años </option>


											<option value="11">
												11 años </option>


											<option value="12">
												12 años </option>


											<option value="13">
												13 años </option>


											<option value="14">
												14 años </option>


											<option value="15">
												15 años </option>


											<option value="16">
												16 años </option>


											<option value="17">
												17 años </option>


											<option value="18">
												18 años </option>


											<option value="19">
												19 años </option>


											<option value="20">
												20 años </option>


											<option value="21">
												21 años </option>


											<option value="22">
												22 años </option>


											<option value="23">
												23 años </option>


											<option value="24">
												24 años </option>


											<option value="25">
												25 años </option>


											<option value="26">
												26 años </option>


											<option value="27">
												27 años </option>


											<option value="28">
												28 años </option>


											<option value="29">
												29 años </option>


											<option value="30">
												30 años o más </option>

										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" for="working">
											<i class="fa"></i>
											Estás trabajando? </label>
										<div style="margin-top: 15px;">
											<div class="radio-inline">
												<label>
													<input type="radio" name="working" value="yes">
													Sí </label>
											</div>
											<div class="radio-inline">
												<label>
													<input type="radio" name="working" value="no">
													No </label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label" for="out_of_work">
											<i class="fa"></i>
											Si no, desde hace cuando? </label>
										<select name="out_of_work" id="out_of_work" class="form-control">
											<option value="">Estoy trabajando</option>
											<option value="0">Menos de 1 mes</option>
											<option value="1">1 mes</option>


											<option value="2">
												2 meses </option>


											<option value="3">
												3 meses </option>


											<option value="4">
												4 meses </option>


											<option value="5">
												5 meses </option>


											<option value="6">
												6 meses </option>


											<option value="7">
												7 meses </option>


											<option value="8">
												8 meses </option>


											<option value="9">
												9 meses </option>


											<option value="10">
												10 meses </option>


											<option value="11">
												11 meses </option>


											<option value="12">
												1 año </option>


											<option value="24">
												2 años </option>


											<option value="36">
												3 años </option>


											<option value="48">
												4 años </option>


											<option value="60">
												5 años </option>


											<option value="72">
												6 años </option>


											<option value="84">
												7 años </option>


											<option value="96">
												8 años </option>


											<option value="108">
												9 años </option>


											<option value="120">
												10 años ou mais </option>


										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="last_company">
											<i class="fa"></i>
											Última Empresa </label>
										<input type="text" class="form-control" name="last_company" id="last_company" placeholder="Última Empresa" value="">
									</div>
									<div class="form-group">
										<label class="control-label" for="min_income">
											<i class="fa"></i>
											Expectativa de renda mínima </label>
										<input type="number" class="form-control" id="min_income" name="min_income" value="" placeholder="Renda mínima">
									</div>
									<div class="form-group">
										<label class="control-label" for="max_income">
											<i class="fa"></i>
											Expectativa de renda máxima </label>
										<input type="number" class="form-control" id="max_income" name="max_income" min="0" value="" placeholder="Renda máxima">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="last_position">
											<i class="fa"></i>
											Última Posición </label>
										<input type="text" class="form-control" name="last_position" id="last_position" placeholder="Última Posición" value="">
									</div>
									<div class="form-group">
										<label class="control-label" for="target_positions">
											<i class="fa"></i>
											Posiciones Meta </label>
										<textarea class="form-control" name="target_positions" id="target_positions" style="height: 144px;" placeholder="¿Qué posiciones le interesan?"></textarea>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="user_areas">
											Áreas con Experiencia </label>
									</div>
									<select class="mult-select" id="user_areas" name="user_areas[]" multiple="multiple">
										<option value="135">Administración</option>
										<option value="17">Arquitectura</option>
										<option value="137">Asesoría / Consultoría</option>
										<option value="161">C Level</option>
										<option value="162">CEO</option>
										<option value="138">Comercial</option>
										<option value="139">Compras</option>
										<option value="24">Comunicaciones</option>
										<option value="25">Contabilidad</option>
										<option value="163">Director</option>
										<option value="142">Digital</option>
										<option value="143">Diseño Gráfico</option>
										<option value="144">Educación</option>
										<option value="145">Financiero</option>
										<option value="146">Fotografía y Edición</option>
										<option value="164">Gerente General</option>
										<option value="6">Ingeniería</option>
										<option value="18">Legal</option>
										<option value="148">Logística</option>
										<option value="16">Marketing</option>
										<option value="19">Medicina</option>
										<option value="166">Nuevos Negocios</option>
										<option value="21">Operaciones</option>
										<option value="29">Proyectos</option>
										<option value="154">Publicidad</option>
										<option value="8">Recursos Humanos</option>
										<option value="165">Seguros</option>
										<option value="70">Sostenibilidad</option>
										<option value="167">Supply Chain</option>
										<option value="7">Tecnología de la Informacion</option>
										<option value="168">Ventas</option>
									</select>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Áreas Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>

										<select class="mult-select" name="user_target_areas[]" multiple="multiple">
											<option value="135" selected>Administración</option>
											<option value="17">Arquitectura</option>
											<option value="137">Asesoría / Consultoría</option>
											<option value="161">C Level</option>
											<option value="162">CEO</option>
											<option value="138">Comercial</option>
											<option value="139">Compras</option>
											<option value="24">Comunicaciones</option>
											<option value="25">Contabilidad</option>
											<option value="163">Director</option>
											<option value="142">Digital</option>
											<option value="143">Diseño Gráfico</option>
											<option value="144">Educación</option>
											<option value="145">Financiero</option>
											<option value="146">Fotografía y Edición</option>
											<option value="164">Gerente General</option>
											<option value="6">Ingeniería</option>
											<option value="18">Legal</option>
											<option value="148">Logística</option>
											<option value="16">Marketing</option>
											<option value="19">Medicina</option>
											<option value="166">Nuevos Negocios</option>
											<option value="21">Operaciones</option>
											<option value="29">Proyectos</option>
											<option value="154">Publicidad</option>
											<option value="8">Recursos Humanos</option>
											<option value="165">Seguros</option>
											<option value="70">Sostenibilidad</option>
											<option value="167">Supply Chain</option>
											<option value="7">Tecnología de la Informacion</option>
											<option value="168">Ventas</option>
										</select>
									</div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Mercados con Experiencia </label>

										<select class="mult-select" name="user_markets[]" multiple="multiple">
											<option value="30">Agroindustria</option>
											<option value="31">Automotriz</option>
											<option value="60">Banca y Financiero</option>
											<option value="33">Bienes de Consumo</option>
											<option value="170">Commodities</option>
											<option value="47">Comunicación</option>
											<option value="57">Construcción Civil</option>
											<option value="35">Construcción Pesada</option>
											<option value="32">Consultoría</option>
											<option value="155">Comercio</option>
											<option value="67">Deporte</option>
											<option value="156">Digital</option>
											<option value="36">Educación </option>
											<option value="37">Electrónica</option>
											<option value="38">Energía</option>
											<option value="39">Farmacéutica</option>
											<option value="64">Importación y Exportación</option>
											<option value="106">Inmobiliario</option>
											<option value="40">Ingeniería</option>
											<option value="61">Legal</option>
											<option value="169">Líneas Aéreas</option>
											<option value="41">Logística y transporte</option>
											<option value="171">Máquinas y Equipos industriales</option>
											<option value="42">Manufactura / Producción</option>
											<option value="157">Medicina</option>
											<option value="43">Minería</option>
											<option value="45">Ocio y Entretenimiento</option>
											<option value="117">Organismos No Gubernamentales (ONGs)</option>
											<option value="118">Organismos Internacionales</option>
											<option value="158">Pesca</option>
											<option value="46">Petróleo y Gas</option>
											<option value="59">Publicidad</option>
											<option value="48">Químico, plástico y petroquímico</option>
											<option value="49">Retail</option>
											<option value="50">Sector Público</option>
											<option value="51">Seguros</option>
											<option value="159">Servicios Generales</option>
											<option value="52">Telecomunicaciones</option>
											<option value="53">Textil</option>
											<option value="54">TI</option>
											<option value="160">Transporte</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">
											Mercados Meta <span class="required" data-toggle="tooltip" title="Este campo es obligatorio"> * </span>
										</label>

										<select class="mult-select" name="user_target_markets[]" multiple="multiple" required="required">
											<option value="30">Agroindustria</option>
											<option value="31">Automotriz</option>
											<option value="60">Banca y Financiero</option>
											<option value="33">Bienes de Consumo</option>
											<option value="170">Commodities</option>
											<option value="47">Comunicación</option>
											<option value="57">Construcción Civil</option>
											<option value="35">Construcción Pesada</option>
											<option value="32">Consultoría</option>
											<option value="155">Comercio</option>
											<option value="67">Deporte</option>
											<option value="156">Digital</option>
											<option value="36">Educación </option>
											<option value="37">Electrónica</option>
											<option value="38" selected>Energía</option>
											<option value="39">Farmacéutica</option>
											<option value="64">Importación y Exportación</option>
											<option value="106">Inmobiliario</option>
											<option value="40">Ingeniería</option>
											<option value="61">Legal</option>
											<option value="169">Líneas Aéreas</option>
											<option value="41">Logística y transporte</option>
											<option value="171">Máquinas y Equipos industriales</option>
											<option value="42">Manufactura / Producción</option>
											<option value="157">Medicina</option>
											<option value="43">Minería</option>
											<option value="45">Ocio y Entretenimiento</option>
											<option value="117">Organismos No Gubernamentales (ONGs)</option>
											<option value="118">Organismos Internacionales</option>
											<option value="158">Pesca</option>
											<option value="46">Petróleo y Gas</option>
											<option value="59">Publicidad</option>
											<option value="48">Químico, plástico y petroquímico</option>
											<option value="49">Retail</option>
											<option value="50">Sector Público</option>
											<option value="51">Seguros</option>
											<option value="159">Servicios Generales</option>
											<option value="52">Telecomunicaciones</option>
											<option value="53">Textil</option>
											<option value="54">TI</option>
											<option value="160">Transporte</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Referencias Profesionales </h3>
						</div>
						<div class="panel-body" id="user-references-panel">


							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="name_0">
											<i class="fa"></i>
											Nombre </label>
										<input type="text" name="references[0][name]" id="name_0" class="form-control" placeholder="Nombre de la Referencia" value="">
										<input type="hidden" name="references[0][id]" value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="email_0">
											<i class="fa"></i>
											Correo </label>
										<input type="email" name="references[0][email]" id="email_0" class="form-control" placeholder="Correo electrónico de la Referencia" value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="phone_0">
											<i class="fa"></i>
											Teléfono </label>
										<input type="tel" name="references[0][phone]" id="phone_0" class="form-control" placeholder="Teléfono de la Referencia" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="company_0">
											<i class="fa"></i>
											Empresa </label>
										<input type="text" name="references[0][company]" id="company_0" class="form-control" placeholder="Nombre de la Empresa donde Trabajó" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="position_0">
											<i class="fa"></i>
											Posición </label>
										<input type="text" name="references[0][position]" id="position_0" class="form-control" placeholder="Posición que Ocupó en la Empresa" value="">
									</div>
								</div>
							</div>


							<hr>


							<div class="row" id="to-copy-reference" data-num="1" hidden="true">
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="name_1">
											<i class="fa"></i>
											Nombre </label>
										<input type="text" name="references[1][name]" id="name_1" class="form-control" placeholder="Nombre de la Referencia" value="">
										<input type="hidden" name="references[1][id]" value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="email_1">
											<i class="fa"></i>
											Correo </label>
										<input type="email" name="references[1][email]" id="email_1" class="form-control" placeholder="Correo electrónico de la Referencia" value="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="control-label" for="phone_1">
											<i class="fa"></i>
											Teléfono </label>
										<input type="tel" name="references[1][phone]" id="phone_1" class="form-control" placeholder="Teléfono de la Referencia" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="company_1">
											<i class="fa"></i>
											Empresa </label>
										<input type="text" name="references[1][company]" id="company_1" class="form-control" placeholder="Nombre de la Empresa donde Trabajó" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="position_1">
											<i class="fa"></i>
											Posición </label>
										<input type="text" name="references[1][position]" id="position_1" class="form-control" placeholder="Posición que Ocupó en la Empresa" value="">
									</div>
								</div>
							</div>


							<button type="button" id="button-add-user-reference" class="btn btn btn-primary">
								<i class="fas fa-plus"></i>
								Adicionar referência </button>

						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Resumen del Perfil </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label" for="summary">
											Por favor, cuéntenos con sus palabras y de manera resumida, sobre su perfil profesional. </label>
										<textarea class="form-control" name="summary" id="summary" rows="6"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default" style="margin-top: 20px;">
						<div class="panel-heading">
							<h3 class="panel-title">
								Book de Candidatos </h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<div class="checkbox">
											<label>
												<input type="checkbox" value="yes" name="book_hunting" checked="checked">
												Autorizo que mi perfil aparezca en el Book de Candidatos </label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							<i class="fas fa-save"></i>
							Grabar </button>
					</div>

				</form>
			</div>
		</div>
	</div>
