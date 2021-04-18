
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-yellow"><i class="fa fa-envelope"></i></span>
									<div class="right">
										<span class="value"><?= ucfirst($this->fungsi->count_pending()) ?></span>
										<span class="title">PENGAJUAN PENDING</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-red"><i class="fa fa-times-rectangle"></i></span>
									<div class="right">
										<span class="value"><?= ucfirst($this->fungsi->count_ditolak()) ?></span>
										<span class="title">PENGAJUAN DITOLAK</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-green"><i class="fa fa-check-square"></i></span>
									<div class="right">
										<span class="value"><?= ucfirst($this->fungsi->count_approved()) ?></span>
										<span class="title">PENGAJUAN DITERIMA
											<span class="change text-indicator-red">(- 23)</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget-metric_1 animate">
									<span class="icon-wrapper custom-bg-purple"><i class="fa fa-user-plus"></i></span>
									<div class="right">
										<span class="value">56.72%</span>
										<span class="title">PELAMAR HARI INI
											<span class="change text-indicator-green">(+ 12.64%)</span>
										</span>
									</div>
								</div>
							</div>
						</div>