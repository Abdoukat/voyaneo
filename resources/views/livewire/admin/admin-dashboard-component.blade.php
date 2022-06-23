<div class="content">
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container" style="padding: 120px">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    @php
                    $user = DB::table('users')->get();
                    $count_users = count($user);
                    @endphp
                    <span class="icon-stat-label">User</span>
                    <span class="icon-stat-value">{{$count_users}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fas fa-users icon-stat-visual" style="color:#FDA7DF;font-size: 30px"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                @php
                $avis = DB::table('avis')->get();
                $count_avis = count($avis);
                @endphp

              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Les commentaires</span>
                    <span class="icon-stat-value">{{$count_avis}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fas fa-comment icon-stat-visual" style="color: rgb(43, 226, 226);font-size: 30px"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                @php
                        $offre = DB::table('products')->get();
                        $count_offre = count($offre);
                @endphp
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Les offres</span>
                    <span class="icon-stat-value">{{$count_offre}}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="fad fa-suitcase icon-stat-visual" style="color: #f9ca24;font-size: 30px"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
                @php
                    $order = DB::table('orders')->get();
                    $count_order = count($order);
                @endphp
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Les commandes</span>
                    <span class="icon-stat-value">{{$count_order}}</span>
                  </div>
                  <div class="col-xs-4 text-center">

                    <i class="fas fa-money-check-alt icon-stat-visual" style="color: #ED4C67;font-size: 30px"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="fa fa-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

