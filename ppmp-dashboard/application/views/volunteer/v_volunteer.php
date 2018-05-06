<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('templates/v_header'); ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="javascript.void(0);" class="site_title"><span>Simpul Relawan</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url('assets/images/').$this->session->userdata['ppmp']['ap_image'];?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php echo $this->session->userdata['ppmp']['ap_name'];?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->
          <br />
          <!-- sidebar menu -->
          <?php $this->load->view('templates/v_left_menu'); ?>
          <!-- sidebar menu -->
        </div>
      </div>

      <!-- top nav -->
      <?php $this->load->view('templates/v_top_menu'); ?>
      <!-- top nav -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">
              <div class="dashboard_graph">
                <div class="row x_title">
                   <h2>Usia dan Jenis Kelamin Relawan</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="agechart" width="500" height="150"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="x_title">
                   <h2>Lokasi</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <?php
                    if(!empty($location)){
                      $loc = '';
                      $loc_cnt = 0;
                      foreach($location as $data){
                        $string_array = explode(",",$data->domicile);
                        $loc = $string_array[3].', '.preg_replace('/\d+/u', '', $string_array[4]);
                        $loc_cnt = $data->cnt;
                  ?>
                    <div class="widget_summary">
                      <div class="w_left" style="width: 50%;">
                        <span><?= $loc ?></span>
                      </div>
                      <div class="w_center" style="width: 50%;">
                        <div class="progress">
                          <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $loc_cnt ?>"
                                      aria-valuemin="0" aria-valuemax="100" style="width: <?= $loc_cnt ?>%;">
                            <span class="sr-only"><?= $loc_cnt ?>% Complete</span>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  <?php
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="x_title">
                   <h2>Kanal</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Whatsapp</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $whatsapp ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?= $whatsapp ?>%;">
                          <span class="sr-only"><?= $whatsapp ?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Line</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $line ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?= $line ?>%;">
                          <span class="sr-only"><?= $line ?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Instagram</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $instagram ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?= $instagram ?>%;">
                          <span class="sr-only"><?= $instagram ?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Twitter</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $twitter ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?= $twitter ?>%;">
                          <span class="sr-only"><?= $twitter ?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Telegram</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="<?= $telegram ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?= $telegram ?>%;">
                          <span class="sr-only"><?= $telegram ?>% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Kegiatan</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="echart_kegiatan" style="height:350px;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Bidang Kegiatan</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="echart_bidang" style="height:350px;"></div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Pendidikan</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="echart_pendidikan" style="height:350px;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Minat/Komunitas</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="echart_komunitas" style="height:350px;"></div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Kemampuan Khusus</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div id="echart_kemampuan" style="height:350px;"></div>
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                   <h2>Database Relawan</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="text-align: center; width: 5%;">No.</th>
                          <th style="text-align: center;">Nama Lengkap</th>
                          <th style="text-align: center;">Jenis Kelamin</th>
                          <th style="text-align: center;">Alamat</th>
                          <th style="text-align: center;">Pendidikan</th>
                          <th style="text-align: center; width: 5%;">Detail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if($volunteer > 0){
                            $no = 1;
                            foreach($volunteer as $data){
                        ?>
                            <tr>
                              <td><?= $no ?></td>
                              <td><?= $data->name ?></td>
                              <td>
                              <?php
                                if($data->gender == 'L'){
                                  echo "Laki-Laki";
                                }else{
                                  echo "Perempuan";
                                }
                              ?>
                              </td>
                              <td><?= $data->address ?></td>
                              <td><?= $data->education ?></td>
                              <td><a class="btn btn-warning btn-xs" href="<?php echo site_url('Volunteer/detail_volunteer').'/'.$data->user_id;?>">
    										           <i class="fa fa-binoculars" title="Detail"></i></a></td>
                            </tr>
                        <?php
                              $no++;
                            }
                          }
                        ?>
                      </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

      </div>
      <!-- page content -->

      <!-- footer content -->
      <?php $this->load->view('templates/v_copyright'); ?>
      <!-- footer content -->
    </div>
    <input type="hidden" id="vallk1" value="<?= $lelaki1 ?>" />
    <input type="hidden" id="vallk2" value="<?= $lelaki2 ?>" />
    <input type="hidden" id="vallk3" value="<?= $lelaki3 ?>" />
    <input type="hidden" id="vallk4" value="<?= $lelaki4 ?>" />
    <input type="hidden" id="vallk5" value="<?= $lelaki5 ?>" />
    <input type="hidden" id="vallk6" value="<?= $lelaki6 ?>" />
    <input type="hidden" id="valpr1" value="<?= $perempuan1 ?>" />
    <input type="hidden" id="valpr2" value="<?= $perempuan2 ?>" />
    <input type="hidden" id="valpr3" value="<?= $perempuan3 ?>" />
    <input type="hidden" id="valpr4" value="<?= $perempuan4 ?>" />
    <input type="hidden" id="valpr5" value="<?= $perempuan5 ?>" />
    <input type="hidden" id="valpr6" value="<?= $perempuan6 ?>" />
  <?php $this->load->view('templates/v_footer'); ?>
</body>
<script type="text/javascript">
    var numberWithCommas = function(x) {
                              return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                          };

    var dataPack1 = [$('#vallk1').val(),$('#vallk2').val(),$('#vallk3').val(),$('#vallk4').val(),$('#vallk5').val(),$('#vallk6').val()];
    var dataPack2 = [$('#valpr1').val(),$('#valpr2').val(),$('#valpr3').val(),$('#valpr4').val(),$('#valpr5').val(),$('#valpr6').val()];
    var dates = ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"];
    var bar_ctx = document.getElementById('agechart');

    var bar_chart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
            labels: dates,
            datasets: [
            {
                label: 'Laki-Laki',
                data: dataPack1,
                backgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBackgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBorderWidth: 2,
                hoverBorderColor: 'lightgrey'
            },
            {
                label: 'Perempuan',
                data: dataPack2,
                backgroundColor: "rgba(225, 58, 55, 0.7)",
                hoverBackgroundColor: "rgba(225, 58, 55, 0.7)",
                hoverBorderWidth: 2,
                hoverBorderColor: 'lightgrey'
            },
            ]
        },
        options: {
            animation: {
              duration: 10,
            },
            tooltips: {
              mode: 'label',
              callbacks: {
              label: function(tooltipItem, data) {
                return data.datasets[tooltipItem.datasetIndex].label + ": " + numberWithCommas(tooltipItem.yLabel);
              }
              }
             },
            scales: {
              xAxes: [{
                stacked: true,
                gridLines: { display: false },
                }],
              yAxes: [{
                stacked: true,
                ticks: {
                  callback: function(value) { return numberWithCommas(value); },
                },
                }],
            }, // scales
            legend: {display: true}
        } // options
      }
    );

    var theme = {
        				  color: [
        					  '#34d423', '#c1429b', '#c09ada', '#270b44',
                    '#300616', '#6b6707', '#8b60dc', '#3ea125',
                    '#84b81d', '#9ef4c1', '#c8c23d', '#5b79a0',
          					'#fec280', '#45f69c', '#e25a20', '#2ce366'
        				  ],

        				  title: {
        					  itemGap: 8,
        					  textStyle: {
        						  fontWeight: 'normal',
        						  color: '#408829'
        					  }
        				  },

        				  dataRange: {
        					  color: ['#1f610a', '#97b58d']
        				  },

        				  toolbox: {
        					  color: ['#408829', '#408829', '#408829', '#408829']
        				  },

        				  tooltip: {
        					  backgroundColor: 'rgba(0,0,0,0.5)',
        					  axisPointer: {
        						  type: 'line',
        						  lineStyle: {
        							  color: '#408829',
        							  type: 'dashed'
        						  },
        						  crossStyle: {
        							  color: '#408829'
        						  },
        						  shadowStyle: {
        							  color: 'rgba(200,200,200,0.3)'
        						  }
        					  }
        				  },

        				  dataZoom: {
        					  dataBackgroundColor: '#eee',
        					  fillerColor: 'rgba(64,136,41,0.2)',
        					  handleColor: '#408829'
        				  },

        				  grid: {
        					  borderWidth: 0
        				  },

        				  categoryAxis: {
        					  axisLine: {
        						  lineStyle: {
        							  color: '#408829'
        						  }
        					  },
        					  splitLine: {
        						  lineStyle: {
        							  color: ['#eee']
        						  }
        					  }
        				  },

        				  valueAxis: {
        					  axisLine: {
        						  lineStyle: {
        							  color: '#408829'
        						  }
        					  },
        					  splitArea: {
        						  show: true,
        						  areaStyle: {
        							  color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
        						  }
        					  },
        					  splitLine: {
        						  lineStyle: {
        							  color: ['#eee']
        						  }
        					  }
        				  },

        				  timeline: {
        					  lineStyle: {
        						  color: '#408829'
        					  },
        					  controlStyle: {
        						  normal: {color: '#408829'},
        						  emphasis: {color: '#408829'}
        					  }
        				  },

    				  k: {
    					  itemStyle: {
    						  normal: {
    							  color: '#68a54a',
    							  color0: '#a9cba2',
    							  lineStyle: {
    								  width: 1,
    								  color: '#408829',
    								  color0: '#86b379'
    							  }
    						  }
    					  }
    				  },
    				  map: {
    					  itemStyle: {
    						  normal: {
    							  areaStyle: {
    								  color: '#ddd'
    							  },
    							  label: {
    								  textStyle: {
    									  color: '#c12e34'
    								  }
    							  }
    						  },
    						  emphasis: {
    							  areaStyle: {
    								  color: '#99d2dd'
    							  },
    							  label: {
    								  textStyle: {
    									  color: '#c12e34'
    								  }
    							  }
    						  }
    					  }
    				  },
    				  force: {
    					  itemStyle: {
    						  normal: {
    							  linkStyle: {
    								  strokeColor: '#408829'
    							  }
    						  }
    					  }
    				  },
    				  chord: {
    					  padding: 4,
    					  itemStyle: {
    						  normal: {
    							  lineStyle: {
    								  width: 1,
    								  color: 'rgba(128, 128, 128, 0.5)'
    							  },
    							  chordStyle: {
    								  lineStyle: {
    									  width: 1,
    									  color: 'rgba(128, 128, 128, 0.5)'
    								  }
    							  }
    						  },
    						  emphasis: {
    							  lineStyle: {
    								  width: 1,
    								  color: 'rgba(128, 128, 128, 0.5)'
    							  },
    							  chordStyle: {
    								  lineStyle: {
    									  width: 1,
    									  color: 'rgba(128, 128, 128, 0.5)'
    								  }
    							  }
    						  }
    					  }
    				  },
    				  gauge: {
    					  startAngle: 225,
    					  endAngle: -45,
    					  axisLine: {
    						  show: true,
    						  lineStyle: {
    							  color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
    							  width: 8
    						  }
    					  },
    					  axisTick: {
    						  splitNumber: 10,
    						  length: 12,
    						  lineStyle: {
    							  color: 'auto'
    						  }
    					  },
    					  axisLabel: {
    						  textStyle: {
    							  color: 'auto'
    						  }
    					  },
    					  splitLine: {
    						  length: 18,
    						  lineStyle: {
    							  color: 'auto'
    						  }
    					  },
    					  pointer: {
    						  length: '90%',
    						  color: 'auto'
    					  },
    					  title: {
    						  textStyle: {
    							  color: '#333'
    						  }
    					  },
    					  detail: {
    						  textStyle: {
    							  color: 'auto'
    						  }
    					  }
    				  },
    				  textStyle: {
    					  fontFamily: 'Arial, Verdana, sans-serif'
    				  }
    			  };


    if ($('#echart_kegiatan').length ){

      var echartkegiatan = echarts.init(document.getElementById('echart_kegiatan'), theme);

      $.ajax({
        url : "<?php echo site_url('Volunteer/getKegiatan')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          echartkegiatan.setOption({
        	tooltip: {
        	  trigger: 'item',
        	  formatter: "{a} <br/>{b} : {c} ({d}%)"
        	},
        	legend: {
        	  x: 'center',
        	  y: 'right',
        	  data: ['Pelajar/Mahasiswa', 'Pegawai Negeri', 'Pegawai Swasta', 'Pegawai BUMN', 'Wiraswasta', 'Pensiunan', 'Pekerja Lepas (Freelance)', 'TNI/POLRI', 'Mengurus Rumah Tangga', 'Belum/Tidak Bekerja']
        	},
        	toolbox: {
        	  show: true,
        	  feature: {
        		magicType: {
        		  show: true,
        		  type: ['pie', 'funnel'],
        		  option: {
        			funnel: {
        			  x: '25%',
        			  width: '50%',
        			  funnelAlign: 'left'
        			}
        		  }
        		}
        	  }
        	},
        	calculable: true,
        	series: [{
        	  name: 'Kegiatan',
        	  type: 'pie',
        	  radius: '55%',
        	  center: ['50%', '48%'],
        	  data: [{
        		value: data.pelajar,
        		name: 'Pelajar/Mahasiswa'
        	  }, {
        		value: data.pns,
        		name: 'Pegawai Negeri'
        	  }, {
        		value: data.swasta,
        		name: 'Pegawai Swasta'
        	  }, {
        		value: data.bumn,
        		name: 'Pegawai BUMN'
        	  }, {
        		value: data.wiraswasta,
        		name: 'Wiraswasta'
            },{
            value: data.pensiunan,
            name: 'Pensiunan'
            }, {
            value: data.freelance,
            name: 'Pekerja Lepas (Freelance)'
            }, {
            value: data.tni,
            name: 'TNI/POLRI'
            }, {
            value: data.irt,
            name: 'Mengurus Rumah Tangga'
            }, {
            value: data.tidak,
            name: 'Belum/Tidak Bekerja'
            }]
        	}]
          });

          var dataStyle = {
        	normal: {
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	}
          };

          var placeHolderStyle = {
        	normal: {
        	  color: 'rgba(0,0,0,0)',
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	},
        	emphasis: {
        	  color: 'rgba(0,0,0,0)'
        	}
          };
      	}
      });
    }

    if ($('#echart_bidang').length ){

      var echartbidang = echarts.init(document.getElementById('echart_bidang'), theme);

      $.ajax({
        url : "<?php echo site_url('Volunteer/getBidang')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          echartbidang.setOption({
            tooltip: {
              trigger: 'item',
              formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
              x: 'center',
              y: 'right',
              data: ['Pendidikan', 'Pertanian dan Perkebunan', 'Peternakan', 'Perikanan', 'Kesehatan', 'Hukum', 'Manufaktur', 'Konstruksi', 'Consumer Goods', 'Energi', 'Media', 'Pertambangan', 'Politik', 'IT', 'Startup', 'Keuangan', 'Pariwisata', 'Logistik', 'Transportasi', 'Pemasaran', 'Properti', 'Telekomunikasi', 'Seni', 'Entertainment']
            },
            toolbox: {
              show: true,
              feature: {
              magicType: {
                show: true,
                type: ['pie', 'funnel'],
                option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'left',
                  max: 1548
                }
                }
              }
              }
            },
            calculable: true,
            series: [{
              name: 'Bidang Kegiatan',
              type: 'pie',
              radius: '55%',
              center: ['50%', '48%'],
              data: [{
              value: data.pendidikan,
              name: 'Pendidikan'
              }, {
              value: data.pertanian,
              name: 'Pertanian dan Perkebunan'
              }, {
              value: data.peternakan,
              name: 'Peternakan'
              }, {
              value: data.perikanan,
              name: 'Perikanan'
              }, {
              value: data.kesehatan,
              name: 'Kesehatan'
              },{
              value: data.hukum,
              name: 'Hukum'
              },{
              value: data.manufaktur,
              name: 'Manufaktur'
              },{
              value: data.konstruksi,
              name: 'Konstruksi'
              }, {
              value: data.consumer,
              name: 'Consumer Goods'
              }, {
              value: data.energi,
              name: 'Energi'
              }, {
              value: data.media,
              name: 'Media'
              }, {
              value: data.pertambangan,
              name: 'Pertambangan'
              },{
              value: data.politik,
              name: 'Politik'
              },{
              value: data.it,
              name: 'IT'
              },{
              value: data.startup,
              name: 'Startup'
              }, {
              value: data.keuangan,
              name: 'Keuangan'
              }, {
              value: data.pariwisata,
              name: 'Pariwisata'
              }, {
              value: data.logistik,
              name: 'Logistik'
              }, {
              value: data.transportasi,
              name: 'Transportasi'
              },{
              value: data.pemasaran,
              name: 'Pemasaran'
              },{
              value: data.properti,
              name: 'Properti'
              },{
              value: data.telekomunikasi,
              name: 'Telekomunikasi'
              },{
              value: data.seni,
              name: 'Seni'
              },{
              value: data.entertainment,
              name: 'Entertainment'
              }]
        	}]
          });

          var dataStyle = {
        	normal: {
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	}
          };

          var placeHolderStyle = {
        	normal: {
        	  color: 'rgba(0,0,0,0)',
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	},
        	emphasis: {
        	  color: 'rgba(0,0,0,0)'
        	}
          };
      	}
      });
    }

    if ($('#echart_pendidikan').length ){

      var echartpendidikan = echarts.init(document.getElementById('echart_pendidikan'), theme);

      $.ajax({
        url : "<?php echo site_url('Volunteer/getPendidikan')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          echartpendidikan.setOption({
            tooltip: {
                    	  trigger: 'item',
                    	  formatter: "{a} <br/>{b} : {c} ({d}%)"
                      },
          	legend: {
                  	  x: 'center',
                  	  y: 'right',
                  	  data: ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3', 'Tidak menempuh pendidikan']
                  	},
          	toolbox: {
                  	  show: true,
                  	  feature: {
                            		magicType: {
                                      		  show: true,
                                      		  type: ['pie', 'funnel'],
                                      		  option: {
                                                			funnel: {
                                                          			  x: '25%',
                                                          			  width: '50%',
                                                          			  funnelAlign: 'left',
                                                          			  max: 1548
                                                          			}
                    		                              }
                    		                   }
          	                   }
          	         },
          	calculable: true,
          	series: [{
                        name: 'Pendidikan',
                    	  type: 'pie',
                    	  radius: '55%',
                    	  center: ['50%', '48%'],
                    	  data: [{
                    		value: data.SD,
                    		name: 'SD'
                    	  }, {
                    		value: data.SMP,
                    		name: 'SMP'
                    	  }, {
                    		value: data.SMA,
                    		name: 'SMA'
                    	  }, {
                    		value: data.S1,
                    		name: 'S1'
                    	  }, {
                    		value: data.S2,
                    		name: 'S2'
                        },{
                    		value: data.S3,
                    		name: 'S3'
                    	  },{
                    		value: data.TIDAK,
                    		name: 'Tidak menempuh pendidikan'
                    	  }]
        	        }]
          });

          var dataStyle = {
        	normal: {
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	}
          };

          var placeHolderStyle = {
        	normal: {
        	  color: 'rgba(0,0,0,0)',
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	},
        	emphasis: {
        	  color: 'rgba(0,0,0,0)'
        	}
          };
        }
      });
    }

    if ($('#echart_komunitas').length ){

      var echartkomunitas = echarts.init(document.getElementById('echart_komunitas'), theme);

      $.ajax({
        url : "<?php echo site_url('Volunteer/getKomunitas')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          echartkomunitas.setOption({
        	tooltip: {
        	  trigger: 'item',
        	  formatter: "{a} <br/>{b} : {c} ({d}%)"
        	},
        	legend: {
        	  x: 'center',
        	  y: 'right',
        	  data: ['Olahraga', 'Kecantikan', 'Gaya Hidup', 'Seni', 'Musik', 'Budaya', 'Budaya Popular', 'Film', 'Kuliner', 'Travel', 'Literatur', 'Teknologi', 'Bisnis', 'Kerja Sosial/Amal']
        	},
        	toolbox: {
        	  show: true,
        	  feature: {
        		magicType: {
        		  show: true,
        		  type: ['pie', 'funnel'],
        		  option: {
        			funnel: {
        			  x: '25%',
        			  width: '50%',
        			  funnelAlign: 'left',
        			  max: 1548
        			}
        		  }
        		}
        	  }
        	},
        	calculable: true,
        	series: [{
            name: 'Minat/Komunitas',
        	  type: 'pie',
        	  radius: '55%',
        	  center: ['50%', '48%'],
        	  data: [{
        		value: data.olahraga,
        		name: 'Olahraga'
        	  }, {
        		value: data.kecantikan,
        		name: 'Kecantikan'
        	  }, {
        		value: data.gaya,
        		name: 'Gaya Hidup'
        	  }, {
        		value: data.seni,
        		name: 'Seni'
        	  }, {
        		value: data.musik,
        		name: 'Musik'
            },{
        		value: data.budaya,
        		name: 'Budaya'
        	  },{
        		value: data.popular,
        		name: 'Budaya Popular'
            },{
            value: data.film,
            name: 'Film'
            }, {
            value: data.kuliner,
            name: 'Kuliner'
            }, {
            value: data.travel,
            name: 'Travel'
            }, {
            value: data.literatur,
            name: 'Literatur'
            }, {
            value: data.teknologi,
            name: 'Teknologi'
            },{
            value: data.bisnis,
            name: 'Bisnis'
            },{
            value: data.amal,
            name: 'Kerja Sosial/Amal'
            }]
        	}]
          });

          var dataStyle = {
        	normal: {
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	}
          };

          var placeHolderStyle = {
        	normal: {
        	  color: 'rgba(0,0,0,0)',
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	},
        	emphasis: {
        	  color: 'rgba(0,0,0,0)'
        	}
          };
      	}
      });
    }

    if ($('#echart_kemampuan').length ){

      var echartkemampuan = echarts.init(document.getElementById('echart_kemampuan'), theme);

      $.ajax({
        url : "<?php echo site_url('Volunteer/getKemampuan')?>",
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          echartkemampuan.setOption({
        	tooltip: {
        	  trigger: 'item',
        	  formatter: "{a} <br/>{b} : {c} ({d}%)"
        	},
        	legend: {
        	  x: 'center',
        	  y: 'right',
        	  data: ['Menulis', 'Programming', 'Fotografi', 'Video', 'Desain Grafis', 'Public Speaking', 'Event Organizer', 'Musisi', 'Engineering', 'Logistik / Distribusi', 'Pemasaran', 'Lainnya']
        	},
        	toolbox: {
        	  show: true,
        	  feature: {
        		magicType: {
        		  show: true,
        		  type: ['pie', 'funnel'],
        		  option: {
        			funnel: {
        			  x: '25%',
        			  width: '50%',
        			  funnelAlign: 'left',
        			  max: 1548
        			}
        		  }
        		}
        	  }
        	},
        	calculable: true,
        	series: [{
        	  name: 'Kemampuan Khusus',
        	  type: 'pie',
        	  radius: '55%',
        	  center: ['50%', '48%'],
        	  data: [{
        		value: data.menulis,
        		name: 'Menulis'
        	  }, {
        		value: data.programming,
        		name: 'Programming'
        	  }, {
        		value: data.fotografi,
        		name: 'Fotografi'
        	  }, {
        		value: data.video,
        		name: 'Video'
        	  }, {
        		value: data.desain,
        		name: 'Desain Grafis'
            },{
        		value: data.public,
        		name: 'Public Speaking'
        	  },{
        		value: data.event,
        		name: 'Event Organizer'
            },{
            value: data.musisi,
            name: 'Musisi'
            }, {
            value: data.engineering,
            name: 'Engineering'
            }, {
            value: data.logistik,
            name: 'Logistik / Distribusi'
            },{
            value: data.pemasaran,
            name: 'Pemasaran'
            },{
            value: data.lainnya,
            name: 'Lainnya'
            }]
        	}]
          });

          var dataStyle = {
        	normal: {
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	}
          };

          var placeHolderStyle = {
        	normal: {
        	  color: 'rgba(0,0,0,0)',
        	  label: {
        		show: false
        	  },
        	  labelLine: {
        		show: false
        	  }
        	},
        	emphasis: {
        	  color: 'rgba(0,0,0,0)'
        	}
          };
      	}
      });
    }
</script>
</html>
