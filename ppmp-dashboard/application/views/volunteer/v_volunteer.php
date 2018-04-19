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
              <img src="<?php echo base_url('assets/images/avatar-1.jpg');?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>User</h2>
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
                   <h2>Age & Gender Of Volunteer</h2>
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
                   <h2>Location</h2>
                   <ul class="nav navbar-right panel_toolbox">
                     <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </ul>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Solo, Jateng</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Kuningan, Jabar</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Jakarta, DKI</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Palembang, Sumsel</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Surabaya, Jatim</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                          <span class="sr-only">50% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile fixed_height_320">
              <div class="dashboard_graph">
                <div class="x_title">
                   <h2>Channel</h2>
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                          <span class="sr-only">60% Complete</span>
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                          <span class="sr-only">40% Complete</span>
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                          <span class="sr-only">70% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left" style="width: 50%;">
                      <span>Facebook</span>
                    </div>
                    <div class="w_center" style="width: 50%;">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="20"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                          <span class="sr-only">20% Complete</span>
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
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                          <span class="sr-only">50% Complete</span>
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
                   <h2>Volunteer Database</h2>
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
                          <th style="text-align: center;">Domisili</th>
                          <th style="text-align: center;">Kegiatan</th>
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
                              <td><?= $data->c1 ?></td>
                              <td><?= $data->c2 ?></td>
                              <td><?= $data->c4 ?></td>
                              <td><?= $data->c5 ?></td>
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
  <?php $this->load->view('templates/v_footer'); ?>
</body>
<script type="text/javascript">
    var numberWithCommas = function(x) {
                              return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                          };

    var dataPack1 = [21000, 22000, 26000, 35000, 55000, 55000];
    var dataPack2 = [1000, 1200, 1300, 1400, 1060, 2030];
    var dates = ["18-24", "25-34", "35-44", "45-54", "55-64", "65+"];

    var bar_ctx = document.getElementById('agechart');
    var bar_chart = new Chart(bar_ctx, {
        type: 'bar',
        data: {
            labels: dates,
            datasets: [
            {
                label: 'Male',
                data: dataPack1,
                backgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBackgroundColor: "rgba(55, 160, 225, 0.7)",
                hoverBorderWidth: 2,
                hoverBorderColor: 'lightgrey'
            },
            {
                label: 'Female',
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
    			  funnelAlign: 'left',
    			  max: 1548
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
    		value: 335,
    		name: 'Pelajar/Mahasiswa'
    	  }, {
    		value: 310,
    		name: 'Pegawai Negeri'
    	  }, {
    		value: 234,
    		name: 'Pegawai Swasta'
    	  }, {
    		value: 135,
    		name: 'Pegawai BUMN'
    	  }, {
    		value: 154,
    		name: 'Wiraswasta'
        },{
        value: 335,
        name: 'Pensiunan'
        }, {
        value: 310,
        name: 'Pekerja Lepas (Freelance)'
        }, {
        value: 234,
        name: 'TNI/POLRI'
        }, {
        value: 135,
        name: 'Mengurus Rumah Tangga'
        }, {
        value: 154,
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

    if ($('#echart_bidang').length ){

      var echartbidang = echarts.init(document.getElementById('echart_bidang'), theme);

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
          value: 335,
          name: 'Pendidikan'
          }, {
          value: 310,
          name: 'Pertanian dan Perkebunan'
          }, {
          value: 234,
          name: 'Peternakan'
          }, {
          value: 135,
          name: 'Perikanan'
          }, {
          value: 154,
          name: 'Kesehatan'
          },{
          value: 234,
          name: 'Hukum'
          },{
          value: 135,
          name: 'Manufaktur'
          },{
          value: 335,
          name: 'Konstruksi'
          }, {
          value: 310,
          name: 'Consumer Goods'
          }, {
          value: 234,
          name: 'Energi'
          }, {
          value: 135,
          name: 'Media'
          }, {
          value: 154,
          name: 'Pertambangan'
          },{
          value: 234,
          name: 'Politik'
          },{
          value: 135,
          name: 'IT'
          },{
          value: 335,
          name: 'Startup'
          }, {
          value: 310,
          name: 'Keuangan'
          }, {
          value: 234,
          name: 'Pariwisata'
          }, {
          value: 135,
          name: 'Logistik'
          }, {
          value: 154,
          name: 'Transportasi'
          },{
          value: 234,
          name: 'Pemasaran'
          },{
          value: 135,
          name: 'Properti'
          },{
          value: 154,
          name: 'Telekomunikasi'
          },{
          value: 234,
          name: 'Seni'
          },{
          value: 135,
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

    if ($('#echart_pendidikan').length ){

      var echartpendidikan = echarts.init(document.getElementById('echart_pendidikan'), theme);

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
      		value: 335,
      		name: 'SD'
      	  }, {
      		value: 310,
      		name: 'SMP'
      	  }, {
      		value: 234,
      		name: 'SMA'
      	  }, {
      		value: 135,
      		name: 'S1'
      	  }, {
      		value: 154,
      		name: 'S2'
          },{
      		value: 234,
      		name: 'S3'
      	  },{
      		value: 135,
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

    if ($('#echart_komunitas').length ){

      var echartkomunitas = echarts.init(document.getElementById('echart_komunitas'), theme);

      echartkomunitas.setOption({
    	tooltip: {
    	  trigger: 'item',
    	  formatter: "{a} <br/>{b} : {c} ({d}%)"
    	},
    	legend: {
    	  x: 'center',
    	  y: 'right',
    	  data: ['Olahraga', 'Kecantikan', 'Gaya hidup', 'Seni', 'Musik', 'Budaya', 'Budaya popular', 'Film', 'Kuliner', 'Travel', 'Literatur', 'Teknologi', 'Bisnis', 'Kerja sosial/amal']
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
    		value: 335,
    		name: 'Olahraga'
    	  }, {
    		value: 310,
    		name: 'Kecantikan'
    	  }, {
    		value: 234,
    		name: 'Gaya hidup'
    	  }, {
    		value: 135,
    		name: 'Seni'
    	  }, {
    		value: 154,
    		name: 'Musik'
        },{
    		value: 234,
    		name: 'Budaya'
    	  },{
    		value: 135,
    		name: 'Budaya popular'
        },{
        value: 335,
        name: 'Film'
        }, {
        value: 310,
        name: 'Kuliner'
        }, {
        value: 234,
        name: 'Travel'
        }, {
        value: 135,
        name: 'Literatur'
        }, {
        value: 154,
        name: 'Teknologi'
        },{
        value: 234,
        name: 'Bisnis'
        },{
        value: 135,
        name: 'Kerja sosial/amal'
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

    if ($('#echart_kemampuan').length ){

      var echartkemampuan = echarts.init(document.getElementById('echart_kemampuan'), theme);

      echartkemampuan.setOption({
    	tooltip: {
    	  trigger: 'item',
    	  formatter: "{a} <br/>{b} : {c} ({d}%)"
    	},
    	legend: {
    	  x: 'center',
    	  y: 'right',
    	  data: ['Menulis', 'Programming', 'Fotografi', 'Video', 'Desain Grafis', 'Public Speaking', 'Event Organizer', 'Musisi', 'Engineering', 'Logistik / distribusi', 'Pemasaran', 'Lainnya']
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
    		value: 335,
    		name: 'Menulis'
    	  }, {
    		value: 310,
    		name: 'Programming'
    	  }, {
    		value: 234,
    		name: 'Fotografi'
    	  }, {
    		value: 135,
    		name: 'Video'
    	  }, {
    		value: 154,
    		name: 'Desain Grafis'
        },{
    		value: 234,
    		name: 'Public Speaking'
    	  },{
    		value: 135,
    		name: 'Event Organizer'
        },{
        value: 234,
        name: 'Musisi'
        }, {
        value: 135,
        name: 'Engineering'
        }, {
        value: 154,
        name: 'Logistik / distribusi'
        },{
        value: 234,
        name: 'Pemasaran'
        },{
        value: 135,
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
</script>
</html>
