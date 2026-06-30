<?php require '../layouts/head.php' ?>
<?php require 'layouts/header.php' ?>

<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
	<div class="kt-container  kt-container--fluid ">
		<div class="kt-subheader__main">
			 <h3 class="kt-subheader__title">
                    <span class="kt-portlet__head-icon"><i class="kt-font-brand flaticon2-list-1"></i></span>&nbsp;&nbsp;
                    Detail 
                </h3>
				<span class="kt-subheader__separator kt-subheader__separator--v"></span>
									<div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total" style="color:#ff0000">
											PROJECT</span>
										<form class="kt-margin-l-20" id="kt_subheader_search_form">

										</form>
									</div>


								</div>
		<div class="kt-subheader__toolbar">
			<div class="dropdown dropdown-inline" ddata-placement="left">
				<a href="" class="btn btn-label-brand btn-sm" data-toggle="dropdown" onclick="goBack()">
												<i class="flaticon-reply"></i> Kembali</button>
<script>
function goBack() {
  window.history.back();
}
</script>
												<!--<i class="flaticon2-plus"></i>-->
											</a>
				
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-success">
					<i class="fa fa-check-circle"></i>
					<span class="kt-hidden-mobile">Simpan</span>
				</button>
				
				
			</div>
		</div>
	</div>
</div>
<!-- end:: Content Head -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	

	<!--Begin:: App Content-->

	<div class="row">
	<div class="col-lg-12">
		<div class="kt-portlet kt-portlet--height-fluid-full" id="kt_page_portlet">

				
                    <div class="kt-portlet__body">
<div class="m-portlet m-portlet--tabs">
									<div class="m-portlet__head">
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-fill" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_tabs_6_1" role="tab">
														<i class="flaticon-line-graph"></i> Dashboard
													</a>
												</li>
<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab">
														<i class="fa fa-handshake"></i> Data Project
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab">
														<i class="fa fa-calendar-alt"></i>Time Schedule
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_4" role="tab">
														<i class="fa fa-list-ol"></i>Data Tugas
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_5" role="tab">
														<i class="fa fa-file-upload"></i>Laporan
													</a>
												</li>

												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_6" role="tab">
														<i class="fa fa-clipboard-list"></i>Dokumen Pendukung
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_7" role="tab">
														<i class="fa fa-users"></i>Data Team
													</a>
												</li>

												
											</ul>
												
		
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
<div class="row">
								
								
								
								<div class="col-xl-12">

									<!--begin:: Widgets/Activity-->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
											<div class="kt-portlet__head-label" style="margin-left:56px">
												<h3 class="kt-portlet__head-title">
													Statistik Tugas
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar" style="margin-right:56px">
												<a href="#" class="btn btn-label-light btn-sm dropdown-toggle" data-toggle="dropdown">
													2026
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon-event-calendar-symbol"></i>
																<span class="kt-nav__link-text">2025</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon fa fa-chart-bar"></i>
																<span class="kt-nav__link-text">Keseluruhan</span>
															</a>
														</li>
														
														
														
													</ul>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit">
											<div class="kt-widget17">
												<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #0961ae">
													<div class="kt-widget17__chart" style="height:120px;">
														<canvas id="kt_chart_activities"></canvas>
													</div>
												</div>
												<div class="kt-widget17__stats">
													<div class="kt-widget17__items">
														<div class="kt-widget17__item">
															
															<span class="kt-widget17__subtitle" style="text-align:center">
																Total Tugas
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>556</b></span>
															</span>
														</div>
														<div class="kt-widget17__item">
															
															<span class="kt-widget17__subtitle" style="text-align:center">
																Belum Selesai
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>1.471</b></span>
															</span>
														</div>
<div class="kt-widget17__item">
															
															<span class="kt-widget17__subtitle" style="text-align:center">
																Selesai
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>2.363</b></span> 
															</span>
														</div>
<div class="kt-widget17__item">
															
															<span class="kt-widget17__subtitle" style="text-align:center">
																Terlambat
															</span>
															<span class="kt-widget17__desc" style="text-align:center">
																<span style="color:#ed1c24; font-size:18px;" class="kt-nav__link kt-font-danger" data-toggle="modal" data-target="#modal_hadir"><b>1.432</b></span>
															</span>
														</div>
														</div>
<div class="kt-widget17__items">


														
														
													</div>
													
													
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Activity-->
								</div>
								
								

							<!--End::Section-->

							

						
						</div>
									<div class="row">
										<div class="col-lg-12">
                      <div class="form-group row">
																<div class="col-xl-5">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Ringkasan Project</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-12">
                          <label class="">Nama Project :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001/AK/PR/0626">
                      </div>
                        </div>

                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
																										<div class="col-lg-6">
                          <label class="">Tanggal Mulai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="30 September 2026">
                      </div>
                        </div>
<div class="col-lg-6">
                          <label class="">Tanggal Selesai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="30 Oktober 2026">
                      </div>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						
<div class="col-lg-3">
                          <label class="">Progress :</label>
                          <div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="1" aria-describedby="basic-addon2" disabled="">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">Hari</span>
													</div>
												</div>
                        </div>
<div class="col-lg-3">
                          <label class="">Tersisa :</label>
                          <div class="input-group">
													<input type="text" class="form-control form-control-sm kt-input-sm" placeholder="364" aria-describedby="basic-addon2" disabled="">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">Hari</span>
													</div>
												</div>
                        </div>
<div class="col-lg-6">
                          <label>Progres Keseluruhan :</label>
                         <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div>
                        </div>
                        </div>
												
                    
						
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										<div class="form-group row">
						
						
						
                        </div>
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  
					  
                      </div>
<div class="col-xl-4">

					<!--begin::Portlet-->
					<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
						<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Info Lainnya</div><br><br>
						<div class="kt-portlet__body">
							<div class="kt-portlet__content">
								<div class="col-lg-12">
                          <label>Progres Keseluruhan :</label>
                         <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div>
                        </div>
                        </div>
								<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
								 <div class="form-group">
<div class="col-lg-12">
                          <label>Progres Belum Selesai :</label>
                         <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div>
                        </div>
							</div>
						</div>
					</div>
					<!--end::Portlet-->
				</div>
					  
						
						
						
						
                             
                                <div class="col-lg-6">
								
                                  <div class="form-group row">
    													
													
												
                          </div>
						



											</div>
											
											</div>




									</div>

							<!--end:: Portlet-->


          </div>



								</div>
											</div>

											<div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										
																<div class="col-xl-4">

									<!--begin::Portlet-->
									<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Ringkasan Project</div><br><br>
										<div class="kt-portlet__body">
																								<div class="kt-portlet__content">
																									<div class="form-group row">
																										<div class="col-lg-6">
                          <label class="">Tanggal Mulai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001/AK/PR/0626">
                      </div>
                        </div>
<div class="col-lg-6">
                          <label class="">Tanggal Selesai :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="0001/AK/PR/0626">
                      </div>
                        </div>
                        </div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
						 <div class="form-group row">
						
<div class="col-lg-3">
                          <label class="">Hari Berlalu :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="29">
                      </div>
                        </div>
<div class="col-lg-3">
                          <label class="">Hari Tersisa :</label>
                          <div class="form-group">
                        <input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="365">
                      </div>
                        </div>
<div class="col-lg-6">
                          <label>Progres Keseluruhan :</label>
                         <div class="progress">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div></div>
                        </div>
                        </div>
												
                    
						
																										<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
																										<div class="form-group row">
						
						
						
                        </div>
																										
																								</div>
																								
																							</div>

									</div>
									
					  
					  

					  
						
						
						
						
                             
                                
											
											</div>



								</div>

								<!--End:: App Content-->
							</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Gant Chart</div><br>

                    <div class="kt-portlet__body">
                      <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <div class="element-box">
                  <div id="fullCalendar"></div>
                </div>
              </div>
						</div>
					</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>



								</div>

								<!--End:: App Content-->
							</div>
											</div>
											<div class="tab-pane" id="m_tabs_6_4" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<br>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
						<div class="kt-portlet__content">
							<div class="form-group row">
							<div class="col-xl-10">&nbsp;
 
 
										</div>
   
 <div class="col-xl-2" style="text-align:right;">
 <a href="#" class="btn btn-brand" data-toggle="modal" data-target="#modal_tambah_tugas">
											<i class="fa fa-plus-circle"></i>Tambah Tugas
										</a>
 
										</div>

										
										
										</div>
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="2%" bgcolor="#f7fcff">#</th>
																					  <th width="2%" bgcolor="#f7fcff">Pegawai</th>
																					  <th width="14%" bgcolor="#f7fcff">Nama Pegawai</th>
																					  <th width="15%" bgcolor="#f7fcff">Department</th>
																					  <th width="9%" bgcolor="#f7fcff">Divisi</th>
																						<th width="15%" bgcolor="#f7fcff">Jabatan</th>
																						<th width="10%" bgcolor="#f7fcff">Sertifikat Keahlian</th>
																						<th width="10%" bgcolor="#f7fcff">Jabatan Pada Project</th>
																						<th width="1%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="text-align:right"; align="center">1</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Teknologi & Riset" /></td>
																						<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Chief Technology Officer" /></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Director" /></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">2</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002" data-html="true">
														<img src="../assets/img/users/100_5.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Oklan Zulkifli, SE" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Chief Executive Officer" /></td>
																					  <td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Manager" /></td>
																					  <td style="text-align:center">
																									  <a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																								  </td>
																			      </tr>
<tr>
																					  <td style="text-align:right"; align="center">3</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003" data-html="true">
														<img src="../assets/img/users/100_3.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Andi Marwan Arsyad, ST" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerja Sama" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kerja Sama" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Business Relationship Manager" /></td>
																					  <td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Manager" /></td>
																					  <td style="text-align:center">
																									  <a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																								  </td>
																			      </tr>
																					
																</tbody>
																<tfoot style="border-top: 2px solid #5867dd">
																</tfoot>

																			</table>
						</div>
					</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_5" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Sertifikat</div><br>
                   
                      <div class="row">
								<div class="col-xl-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" bgcolor="#f7fcff" id="kt_table_2">#</th>

											  <th width="5%" bgcolor="#f7fcff">Uraian<br>Sertifikat</th>
											  <th width="5%" bgcolor="#f7fcff">Dikeluarkan Oleh</th>
											  <th width="2%" bgcolor="#f7fcff">Tahun<br>Sertifikat</th>

											
											  <th width="3%" bgcolor="#f7fcff" rowspan="2">Upload Sertifikat</th>
											  <th width="1%" bgcolor="#f7fcff" rowspan="2">Aksi</th>

										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
											<tr>
												<td style="text-align:center" id="kt_table_1">2</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">3</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>
										  <tr>
												<td style="text-align:center" id="kt_table_1">4</td>
												
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:center" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												
												
												<td style="text-align:center" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>

										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											<div class="tab-pane" id="m_tabs_6_6" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
                <div class="kt-portlet kt-portlet--height-fluid-full kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Data Pengalaman Kerja</div><br>
                   
                      <div class="row">
								<div class="col-12">

 <div class="kt-portlet__body">
 <div>&nbsp;</div>
											<table class="table table-responsive table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr style="text-align:center">
											  <th width="1%" rowspan="2" bgcolor="#f7fcff" id="kt_table_4">#</th>
											  <th colspan="3" bgcolor="#f7fcff">Data Perusahaan</th>
											  <th colspan="2" bgcolor="#f7fcff">Lama Bekerja</th>
											  <th width="5%" rowspan="2" bgcolor="#f7fcff">Jabatan Terakhir</th>
											  <th width="4%" rowspan="2" bgcolor="#f7fcff">Upload Surat Pengalaman</th>
											  <th width="1%" rowspan="2" bgcolor="#f7fcff">Aksi</th>
										  </tr>
											<tr style="text-align:center">
											  <th width="5%" bgcolor="#f7fcff">Nama</th>
											  <th width="5%" bgcolor="#f7fcff">Alamat </th>
											  <th width="5%" bgcolor="#f7fcff"> Nomor Tlp</th>
											  <th width="4%" bgcolor="#f7fcff">Awal</th>
											  <th width="4%" bgcolor="#f7fcff">Akhir</th>
										  </tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center" id="kt_table_1">1</td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder="" /></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>

												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:center" nowrap><div class="form-group">
																							<div class="input-group date">
																								<input type="text" class="form-control form-control-sm" readonly="" placeholder="= Pilih Tanggal =" id="kt_datepicker_2">
																								<div class="input-group-append">
																									<span class="input-group-text">
																										<i class="la la-calendar-check-o"></i>
																									</span>
																								</div>
																							</div>
																						</div></td>
												<td style="text-align:left" nowrap><input type="text" class="form-control form-control-sm" placeholder=""></td>
												<td style="text-align:left" nowrap><div class="form-group m-form__group">
												
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div></td>
												<td style="text-align:center" nowrap><button type="button" class="btn btn-outline-success btn-elevate btn-icon btn-icon btn-sm"><i class="fa fa-plus-circle"></i></button> <button type="button" class="btn btn-outline-hover-danger btn-sm btn-icon"><i class="fa fa-trash-alt"></i></button></td>
										  </tr>


										</tbody>
									</table>

                   
							<!--end:: Portlet-->
										</div>



								</div>

                    </div>



								</div>

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
<div class="tab-pane" id="m_tabs_6_7" role="tabpanel">
												<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-lg-12">
<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
				<br>
					<div class="kt-portlet__body">
						<div class="kt-portlet__content">
							<div class="form-group row">
							<div class="col-xl-10">&nbsp;
 
 
										</div>
   
 <div class="col-xl-2" style="text-align:right;">
 <a href="#" class="btn btn-brand" data-toggle="modal" data-target="#modal_tambah_team">
											<i class="fa fa-plus-circle"></i>Tambah Team
										</a>
 
										</div>

										
										
										</div>
							<table class="table table-striped table-bordered table-hover table-checkable">
																				<thead>
																					<tr>
																					  <th width="2%" bgcolor="#f7fcff">#</th>
																					  <th width="2%" bgcolor="#f7fcff">Pegawai</th>
																					  <th width="14%" bgcolor="#f7fcff">Nama Pegawai</th>
																					  <th width="15%" bgcolor="#f7fcff">Department</th>
																					  <th width="9%" bgcolor="#f7fcff">Divisi</th>
																						<th width="15%" bgcolor="#f7fcff">Jabatan</th>
																						<th width="10%" bgcolor="#f7fcff">Sertifikat Keahlian</th>
																						<th width="10%" bgcolor="#f7fcff">Jabatan Pada Project</th>
																						<th width="1%" bgcolor="#f7fcff">Aksi</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					  <td style="text-align:right"; align="center">1</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000001" data-html="true">
														<img src="../assets/img/users/100_15.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Muhammad Nasrullah, S.Kom" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Teknologi & Riset" /></td>
																						<td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Chief Technology Officer" /></td>
																						<td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																						<td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Director" /></td>
																						<td style="text-align:center">
																										<a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																									</td>
																			      </tr>
																					<tr>
																					  <td style="text-align:right"; align="center">2</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000002" data-html="true">
														<img src="../assets/img/users/100_5.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Oklan Zulkifli, SE" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Direksi" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Chief Executive Officer" /></td>
																					  <td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Manager" /></td>
																					  <td style="text-align:center">
																									  <a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																								  </td>
																			      </tr>
<tr>
																					  <td style="text-align:right"; align="center">3</td>
																					  <td align="center" valign="middle" style="text-align:center"><a href="#" class="kt-media kt-media--sm kt-media--circle" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="NIP : 000000000003" data-html="true">
														<img src="../assets/img/users/100_3.jpg" alt="image">
													</a></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Andi Marwan Arsyad, ST" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Pengembangan Usaha dan Kerja Sama" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Kerja Sama" /></td>
																					  <td><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Business Relationship Manager" /></td>
																					  <td><div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile">
													<label class="custom-file-label" for="customFile"></label>
												</div></td>
																					  <td align="center"><input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="Project Manager" /></td>
																					  <td style="text-align:center">
																									  <a href="javascript:;" data-repeater-delete="" class="btn btn-outline-hover-danger btn-sm btn-icon" data-toggle="kt-tooltip" data-skin="default" title="" data-html="true" data-original-title="Hapus"><i class="fa flaticon2-trash"></i></a>
																								  </td>
																			      </tr>
																					
																</tbody>
																<tfoot style="border-top: 2px solid #5867dd">
																</tfoot>

																			</table>
						</div>
					</div>
				</div>
                

                    </div>

									</div>

							<!--end:: Portlet-->


          </div>
											</div>
											
										</div>
									</div>
								</div>
					

	<!--end::Portlet-->


	<!--end:: Portlet-->


</div>



</div>

<!--End:: App Content-->
</div>

<!--End::App-->
</div>

<!-- end:: Content -->
</div>


</div>
</div>
<div class="modal fade" id="modal_tambah_team" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH TEAM PROJECT</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content"><br>
												

<div class="form-group row">
<div class="col-lg-12">
														<label class="kt-font-brand"><code>*</code> Jabatan Pada Project :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Project Director</option>
					 															</optgroup>
					 															
																				<optgroup label="Manager" class="a">
					 																<option value="HI">Project Manager</option>
					 															</optgroup>
																				<optgroup label="Engineering" class="a">
					 																<option value="HI">Electrical Engineering</option>
					 																<option value="HI">Software Engineering</option>
					 																<option value="HI">Network Engineering</option>
					 															</optgroup>
																				<optgroup label="Project Admin" class="a">
					 																<option value="HI">Project Admin</option>
					 															</optgroup>
																				
<option data-content="<a href='#' class='btn btn-sm m-button-add'><i class='fa fa-plus-circle'></i> Tambah Data</a>" class="select-option-add" value="add"></option>
					 														</select>
													</div>
													</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
<div class="col-lg-8">
														<label class="kt-font-brand"><code>*</code> Cari Pegawai :</label>
														<select data-size="7" data-live-search="true" class="form-control kt-selectpicker" id="tipe">
					 															<optgroup label="Direksi" class="a">
					 																<option value="AK"selected >Muhammad Nasrullah, S.Kom</option>
					 															</optgroup>
					 															
																				<optgroup label="Keuangan" class="a">
					 																<option value="HI">Oklan Zulkifli, SE</option>
					 															</optgroup>
																				<optgroup label="Operasional" class="a">
					 																<option value="HI">Deddy Rafsanjani, S.Sos</option>
					 																<option value="HI">Nursiah, S.Kom</option>
					 															</optgroup>
																				<optgroup label="Teknologi dan Riset" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>
																				<optgroup label="Pengembangan Usaha dan Kerjasama" class="a">
					 																<option value="HI">Muhammad Ramadhan Lerrick, ST</option>
					 															</optgroup>

					 														</select>
													</div>
													<div class="col-lg-4">
														<label class="kt-font-brand">NIP :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="000000000" />
													</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-6">
														<label class="kt-font-brand">Department :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" />
													</div>
<div class="col-lg-6">
														<label class="kt-font-brand">Divisi :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" />
													</div>
												



												
													
													

												</div>
<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
<div class="form-group row">
													
													<div class="col-lg-12">
														<label class="kt-font-brand">Jabatan :</label>
														<input type="text" class="form-control form-control-sm" disabled="disabled" placeholder="" />
													</div>
												



												
													
													

												</div>
												
												
												
												


												
													
													

												</div>
												
											
									<div class="kt-portlet__foot kt-align-right">
												<div class="">
													<button type="button" class="btn btn-sm btn-success">
					<i class="fa fa-check-circle"></i>Lanjut</button>
												</div>
											</div>




									</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							
							
									
        </div>

<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_pending" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<button type="button" class="btn btn-warning btn-sm btn-icon kt_sweetalert_demo_setuju" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Menunggu Persetujuan"><i class="fa fa-clock"></i></button>
														</div>
														
														
														
													</div>
												</div>

												
												
												

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_release" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 1-->
									<div class="modal fade" id="modal_persetujuan_ditolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-md" role="document">
									<div class="modal-content">

										<div class="modal-header">
										<span class="modal-title" id="exampleModalLabel"><span class="kt-badge kt-badge--danger kt-badge--inline"; style="color:#fff";>VERIFIKASI</span></span>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

										
										<div class="kt-portlet__body">
											<div class="tab-content">
											<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000003" data-html="true">
																<img src="../assets/img/users/100_8.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Deddy Rafsanjani, S.Sos
																</a>
																<p class="kt-widget4__text">
																	Kepala Bagian Kepegawaian
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 20:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic" data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000002" data-html="true">
																<img src="../assets/img/users/100_9.jpg" alt="image">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Oklan Zulkifli, SE
																</a>
																<p class="kt-widget4__text">
																	Direktur Umum
																</p>
															</div>
															<span class="kt-badge kt-badge--success kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Disetujui&lt;hr&gt;11 Juli 2025 - 22:33 WITA">
															<i class="fa flaticon2-check-mark"></i>
														</span>
														</div>
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic"  data-toggle="kt-tooltip" data-skin="brand" title="" data-original-title="000000000001" data-html="true">
																<img src="../assets/img/users/100_15.jpg" alt="">
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	Muhammad Nasrullah, S.Kom
																</a>
																<p class="kt-widget4__text">
																	Direktur Utama
																</p>
															</div>
															<span class="kt-badge kt-badge--danger kt-badge--md kt-badge--rounded" data-toggle="kt-tooltip" data-skin="brand" title="" data-html="true" data-original-title="Ditolak&lt;hr&gt;11 Juli 2025 - 22:33 WITA&lt;hr&gt;Minta Dipertimbangkan Kembali">
															<i class="fa flaticon2-delete"></i>
														</span>
														</div>
														
														
														
													</div>
												</div>

							<!--End::App-->
						</div>

								<!--End:: App Content-->
							</div>

									</div>
								</div>
							</div>
							<!--End::Modal 1-->
							<!--begin::Modal 2-->
									<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
										<div class="kt-portlet kt-portlet--height-fluid-full">
										<div class="kt-portlet kt-portlet--height-fluid kt-portlet__head kt-ribbon kt-ribbon--right kt-ribbon--danger">
							<div class="kt-ribbon__target" style="top: 2px; right: -2px;">Assign Project Director</div>
										<div class="kt-portlet__body">
											<div class="kt-portlet__content">
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												</div>

											</div>

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->

<!--end: Datatable -->
</div>
</div>
</div>
<div class="modal fade" id="modal_tambah_tugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">

										<div class="modal-body">
											<div class="kt-portlet kt-portlet--mobile ">
											<div class="kt-portlet__head">

											<div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon"><i class="kt-font-brand fa fa-clipboard-list"></i></span>
												<h3 class="kt-portlet__head-title kt-font-danger kt-bold">TAMBAH TUGAS</h3>
											</div>
<div class="kt-portlet__head-toolbar">
											
											&nbsp;
												<button type="button" class="btn btn-secondary btn-sm btn-outline-danger" data-dismiss="modal">X</button>
											</div>
											
										</div>
										
										<div class="kt-portlet__body">
											
											<div class="form-group row">
												<div class="col-lg-6">
														<label>Nama Pegawai :</label>
														<div class="kt-input-icon kt-input-icon--right">
														<input type="text" class="form-control form-control-sm" placeholder="Search..." id="generalSearch">
														<span class="kt-input-icon__icon kt-input-icon__icon--right">
															<span><i class="la la-search"></i></span>
														</span>
													</div>

												</div>

												<div class="col-lg-6">
														<label>Jabatan :</label>
														<input type="email" class="form-control form-control-sm" disabled="disabled" placeholder="Auto Complete" >

												</div>


												</div>
												

									</div>
										<div class="modal-footer modal-footer-center">
											<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
											<button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i>  Simpan</button>
										</div>
									</div>
								</div>
							</div>
							<!--End::Modal 2-->

<!--end: Datatable -->
</div>
</div>

</div>
<!--begin::Page Scripts(used by this page) -->
<?php require '../layouts/footer.php' ?>
<script src="../assets/dist/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
		    <script src="../assets/dist/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
		    <script src="../assets/dist/main/main.js?version=4.4.0"></script>
		    <script>
		      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		      ga('create', 'UA-XXXXXXX-9', 'auto');
		      ga('send', 'pageview');
		    </script>
<?php require '../layouts/foot.php' ?>
