<table style="border:5px solid #f77e0b;font-family:sans-serif;line-height:22px;width:600px!important;margin-top:50px;border-spacing:0" width="600" cellspacing="0" cellpadding="0" border="0" align="center">

	<tbody><tr>
		<td style="padding:0 40px 0 40px">
			<table style="padding:0;padding-top:25px;padding-bottom:25px;width:600px;border-spacing:0">
				<tbody><tr>
					<td border="0" cellspacing="0" cellpadding="0" style="padding:0;text-align:center" valign="top">
						<div style="margin-bottom:15px;background:#fff;padding:15px;border-radius:5px">
							<a>
								<img src="http://127.0.0.1:8000/images/home/logo_transparent.png" style="height:150px">
							</a>
						</div></td>
					</tr>

					<tr>
						<td border="0" cellspacing="0" cellpadding="0" style="padding:0px 0 15px 0;border-top-left-radius:5px;border-top-right-radius:5px" valign="top">

							<div style="color:#262626;font-size:16px;margin-bottom:15px;line-height:28px;padding:0 15px">
								<p style="color:#262626">
									Hello <span style="font-weight: 700">{{ $customer->first_name }},</span>
								</p>
								<p>
									<span style="font-weight: 700">Your Order place successfully.</span>
								</p>


                                <tr>
                                    <td cellpadding="0" style="padding: 0; width: 100%;padding: 0 25px;" width="100%">
                                        <table cellpadding="0" style="color: #555555; width: 100%; padding: 10px 0; margin-bottom: 10px;border-bottom: 1px solid #333;border-top: 1px solid #333;">
                                            <tr>
                                                <td cellpadding="0" style="padding: 0;font-weight: bold;" width="35%">
                                                    Product Name
                                                </td>
                                                <td cellpadding="0" style="padding: 0;font-weight: bold;" width="35%">
                                                    Quantity
                                                </td>
                                                <td cellpadding="0" align="right" style="padding: 0;text-align: right;font-weight: bold;">
                                                    Tone Price
                                                </td>	
                                                <td cellpadding="0" align="right" style="padding: 0;text-align: right;font-weight: bold;">
                                                    Total Price
                                                </td>							
                                            </tr>
                                        </table>

                                        <table cellpadding="0" style="color: #555555; width: 100%; padding: 10px 0; margin-bottom: 10px;border-bottom: 1px solid #333;border-top: 1px solid #333;">
                                            <tr>
                                                
                                                <td cellpadding="0" style="padding: 0;font-weight: bold;" width="35%">
                                                    <img src="{{ asset('images/product_image/')."/".$product->product_image }}" width="150" height="100" alt="">
                                                </td>
                                                <td cellpadding="0" style="padding: 0;font-weight: bold;" width="35%">
                                                    {{$order_data->quantity }} Tone
                                                </td>
                                                <td cellpadding="0" align="right" style="padding: 0;font-weight: bold;">
                                                    ₹{{$order_data->price}}
                                                </td>	
                                                <td cellpadding="0" align="right" style="padding: 0;text-align: right;font-weight: bold;">
                                                    ₹{{$order_data->total_price}}
                                                </td>							
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <p style="color:#262626">
									Thank you!
								</p>
							</div>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
	</tbody></table>