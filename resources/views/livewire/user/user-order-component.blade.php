


<div>
    <style>
       nav svg{
           height: 20px;
       }
       nav .hidden{
           display: block !important;
       }
    </style>
<div class="top-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <ul class="tn-left">
                    <li><i class="fa fa-phone"></i> 01.77.69.02.57</li>
                    <li><i class="fa fa-envelope"></i> info.voyaneo@gmail.com</li>
                </ul>
            </div>
            <div class="col-6" style="color: #AA8662">
                <div class="tn-right">
                    <a href="/shop"><i class="fas fa-map-marked-alt" style="color: #ce9a67"></i> Offres</a>
                    <a href="{{ route('order.show') }}"><i class="fas fa-shopping-basket" style="color: #ce9a67"></i> Mes réservations</a>
                </div>
            </div>

        </div>
    </div>
</div>
    <div class="container" style="padding: 30px 30px;margin-top: 70px;margin-bottom: 120px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2 class="mb-3 ligne">Mes réservations  </h2>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-dark">
                                    Détail commandes
                                </button>
                               @foreach ($id_order as $id_order)

                                        <div class="list-group-item ">

                                            <table border="0" cellpadding="20" cellspacing="0" width="100%" style="color:#000000;line-height:150%;text-align:left;font:300 16px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif">
                                                <tbody>
                                                <tr>
                                                    <td valign="top" style="font-size:24px;">
                                                    <span style="text-decoration:underline;">Réservation No: #{{$id_order->transactionReference}}</span>
                                                    <h2 style="display:inline-block;font-family:Arial;font-size:24px;font-weight:bold;margin-top:5px;margin-right:0;margin-bottom:5px;margin-left:0;text-align:left;line-height:100%">({{$id_order->Date_expiration}})</h2>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table align="center" cellspacing="0" cellpadding="6" width="95%" style="border:0;color:#000000;line-height:150%;text-align:left;font:300 14px/30px &#39;Helvetica Neue&#39;,Helvetica,Arial,sans-serif;" border=".5px">
                                                <thead>
                                                <tr style="background:#efefef">
                                                    <th scope="col" width="30%" style="text-align:left;border:1px solid #eee">Offre</th>
                                                    <th scope="col" width="15%" style="text-align:right;border:1px solid #eee"></th>
                                                    <th scope="col" width="20%" style="text-align:right;border:1px solid #eee">Prix</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr width="100%">
                                                    <td width="30%" style="text-align:left;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0;word-wrap:break-word">

                                                    </td>
                                                    <td width="15%" style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                                                    1
                                                    </td>
                                                    <td width="20%" style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:1px solid #eee;border-top:0"><span>Rs.190</span></td>
                                                </tr>
                                                </tbody>

                                                <tfoot>
                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">Cart Subtotal </th>
                                                    <th style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:1px solid #eee;border-top:0"><span>Rs.190</span></th>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                                                    Vat</th>
                                                    <td style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:1px solid #eee;border-top:0"><span>Rs.10</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">
                                                    Packing Charges</th>
                                                    <td style="text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:1px solid #eee;border-top:0"><span>Rs.10</span></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" colspan="2" style="text-align:right;background:#efefef;text-align:right;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:0;border-top:0">Order Total</th>
                                                    <td style="background:#efefef;text-align:right;vertical-align:middle;border-left:1px solid #eee;border-bottom:1px solid #eee;border-right:1px solid #eee;border-top:0;color:#7db701;font-weight:bold"><span>{{$id_order->prix}}</span></td>
                                                </tr>
                                                </tfoot>
                                            </table>

                                    </div>

                               @endforeach
                              </div>
                        </div>

                    </div>

                    </div>
                </div>
        </div>
    </div>
</div>




