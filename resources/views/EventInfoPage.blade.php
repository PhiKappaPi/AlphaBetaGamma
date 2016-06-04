<!DOCTYPE html>
<html>
    <head>
        <title>Golfing Tournament</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		
        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
	</head>
	
	<body class="bodystyle">
		<div class="main-container">
		
			<div class="event-title-box" > 
				<div class=text-container>
				<h4 style="font-size: 50px; padding-top: 20px">PHI KAPPA PI</h4>
				<h2 style="font-size: 100px; padding-bottom:10px;">ANNUAL GOLF TOURNAMENT</h2>
				</div>
			</div>
			
			<div class="container-fluid about-container">
				<div class="container">
					<div class="content about-event">
						<p>
							The Alumni Society would like to invite you to the long-lasting tradition of the 2016 PKP Annual Golf Tournament in Arundel, Quebec happening on June 11th, 2016. For years, this event has brought all brothers back to an environment of comradery and joy, allowing everyone to hop on back to memory lane on that single day. 
						</p>
						<p>
							This is an opportunity for actives and alumni to spend some time together to smoke cigars, have a few cold ones, sharpen golf skills and have a good old PKP time. This is the first year that families are invited, and we are very excited about this inclusion!
						</p>
						<p>
							We have many activities open to actives and alumni; you can choose to partake in one or all of them. 
						</p>
					</div>
				</div>
			</div>

			<div class="container-fluid" style="background-color:#0d1e41; padding: 20px 0;">
				<div class="container">
					<h1 class="primary-headers">Event Information</h1>
					<div class="col-md-6">
						<div class="main">
							<h3> Where </h3>
							<dl>
								<dt> Golfing : Arundel Golf & Country Club</dt>
								<dt> Sleeping : Le Grand Lodge Mont-Tremblant</dt>
							</dl>
							
							<h3> When </h3>
							<dl>
								<dt>June 10 and 11 </dt>
								<dt>Golfing On June 11</dt>
								<dd>12 foursomes</dd>
								<dd>First tee-off at 9:30 AM</dd> 
								<dd>Every 8 minutes thereafter </dd>
							</dl>
							<h3> Costs </h3>
							<dl>
								<dt>Green Fees + Obligatory Half Cart: </dt>
								<dd>Alumni $75</dd>
								<dd>Actives $50</dd>
								<dt>Accommodations:</dt>
								<dd>Group rates</dd>
								<dd>Double Deluxe suites from $205 per night + taxes</dd>
								<dd>Double lake-view suites from $195 per night + taxes</dd>
							</dl>
						</div>
					</div>
					<div class="col-md-6">
						<img src="{{URL::asset('img/CoolDoods.jpg')}}" class="event-img">
					</div>
				</div>
			</div>
			
			<div class="container-fluid about-container">
				<div class="container sub">
					<h1 class="primary-headers">Other Activities</h1>
					<div class="col-md-4 activity">
						<dl>
							<h3>For the Family</h5>
							<dd>  Relaxation: massages and Scandinavian baths</dd>
							<dd>Outdoors: hiking or biking</dd>
							<dd>Motorized: airplane/helicopter tours, karting, boat rentals</dd>
						</dl>
					</div>
					<div class="col-md-4 activity">								
						<h3>Relax At Jim's</h5>
						<p>
							Boating will be available<br>
							Help out Team Eileen with dinner preparations<br>
							Volunteer to babysit for mothers going for massages and/or baths<br>
							Brother Jim Ross is hosting the dinner at his cottage beside a lake, minutes from the golf course.<br>
						</p>
					</div>
					<div class="col-md-4 activity">
						<dl>
							<h3>BBQ Dinner at Jim's:</h5>
							<dt>The Works! 
							<dd>Steak and baked potatoes </dd>
							<dd>Caesar salad, stir-fried mushrooms, coleslaw, potato salad</dd> 
							<dd>Fresh bread and more desserts you can count</dd>
							<dt>Reimbursement</dt>
							<dd>Alumni $40</dd>
							<dd>Actives $25 (free if you help with preparations and cleanup)</dd>
							</dt>
						</dl>
					</div>
				</div>	
			</div>
			
			<div class="container-fluid about-container" style="background-color:#0d1e41; padding: 20px 0;">
				<div class="container about-event">
					<p>
					What you need to do:
					</p>
					<p>
					-	Which activities or activity you would like to partake in <br>
					-	Your foursome (golf)<br>
					-	Remind your brothers, close or far, of the golf tournament (we want to see everone!)<br>
					</p>
					<p>
					If you have any questions please private message Dereck Pickford (DPickford@ca.loreal.com) and Sebastien Jacques (sebastien.jacqu@gmail.com)
					</p>
					<p>
					Much love as always,
					</p><p>
					Dereck and Seby
					</p>
				</div>	
				
				<div class="container paypal">
					<div class="col-md-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="business" value="pkpalum@gmail.com">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="button_subtype" value="services">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
							<table>
								<tr><td class="table-title"><input type="hidden" name="on0" value="Golf">Active Packages</td></tr><tr><td><select class="form-control" name="os0">
									<option value="BBQ+Actives">BBQ Only $25.00 CAD</option>
									<option value="Golf+Actives">Golf Only $50.00 CAD</option>
									<option value="Golf+BBQ+Actives">Golf + BBQ $75.00 CAD</option>>
									<option value="Golf+BBQ+Lake-View+Fri+Actives">Golf + BBQ + Double Lake-View (Fri Night Only) $284.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+Fri+Actives">Golf + BBQ + Double Deluxe (Fri Night Only) $304.00 CAD</option>>
									<option value="Golf+BBQ+Lake-View+Sat+Actives">Golf + BBQ + Double Lake-View (Sat Night Only) $284.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+Sat+Actives">Golf + BBQ + Double Deluxe (Sat Night Only) $304.00 CAD</option>>
									<option value="Golf+BBQ+Lake-View+2Nights+Actives">Golf + BBQ + Double Lake-View (2 nights) $493.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+2Nights+Actives">Golf + BBQ + Double Deluxe (2 nights) $533.00 CAD</option>>
								</select> </td></tr>
							</table>
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="option_select0" value="BBQ+Actives">
							<input type="hidden" name="option_amount0" value="25.00">
							<input type="hidden" name="option_select1" value="Golf+Actives">
							<input type="hidden" name="option_amount1" value="50.00">
							<input type="hidden" name="option_select2" value="Golf+BBQ+Actives">
							<input type="hidden" name="option_amount2" value="75.00">
							<input type="hidden" name="option_select3" value="Golf+BBQ+Lake-View+Fri+Actives">
							<input type="hidden" name="option_amount3" value="284.00">
							<input type="hidden" name="option_select4" value="Golf+BBQ+Deluxe+Fri+Actives">
							<input type="hidden" name="option_amount4" value="304.00">
							<input type="hidden" name="option_select5" value="Golf+BBQ+Lake-View+Sat+Actives">
							<input type="hidden" name="option_amount5" value="284.00">
							<input type="hidden" name="option_select6" value="Golf+BBQ+Deluxe+Sat+Actives">
							<input type="hidden" name="option_amount6" value="304.00">
							<input type="hidden" name="option_select7" value="Golf+BBQ+Lake-View+2Nights+Actives">
							<input type="hidden" name="option_amount7" value="493.00">
							<input type="hidden" name="option_select8" value="Golf+BBQ+Deluxe+2Nights+Actives">
							<input type="hidden" name="option_amount8" value="533.00">
							<input type="hidden" name="option_index" value="0">
							<input type="submit" name="submit" value="Pay via Paypal" class="btn btn-primary">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</div>
					<div class="col-md-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="business" value="pkpalum@gmail.com">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="button_subtype" value="services">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
							<table>
								<tr><td class="table-title"><input type="hidden" name="on0" value="Golf">Alumni Packages</td></tr><tr><td><select class="form-control" name="os0">
									<option value="BBQ+Alumni">BBQ Only $40.00 CAD</option>
									<option value="Golf+Alumni">Golf Only $75.00 CAD</option>
									<option value="Golf+BBQ+Alumni">Golf + BBQ $115.00 CAD</option>
									<option value="Golf+BBQ+Lake-View+Fri+Alumni">Golf + BBQ + Double Lake-View (Fri Night Only) $324.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+Fri+Alumni">Golf + BBQ + Double Deluxe (Fri Night Only) $344.00 CAD</option>
									<option value="Golf+BBQ+Lake-View+Sat+Alumni">Golf + BBQ + Double Lake-View (Sat Night Only) $324.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+Sat+Alumni">Golf + BBQ + Double Deluxe (Sat Night Only) $344.00 CAD</option>
									<option value="Golf+BBQ+Lake-View+2Nights+Alumni">Golf + BBQ + Double Lake-View (2 nights) $533.00 CAD</option>
									<option value="Golf+BBQ+Deluxe+2Nights+Alumni">Golf + BBQ + Double Deluxe (2 nights) $573.00 CAD</option>
								</select> </td></tr>
							</table>
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="option_select0" value="BBQ+Alumni">
							<input type="hidden" name="option_amount0" value="40.00">
							<input type="hidden" name="option_select1" value="Golf+Alumni">
							<input type="hidden" name="option_amount1" value="75.00">
							<input type="hidden" name="option_select2" value="Golf+BBQ+Alumni">
							<input type="hidden" name="option_amount2" value="115.00">
							<input type="hidden" name="option_select3" value="Golf+BBQ+Lake-View+Fri+Alumni">
							<input type="hidden" name="option_amount3" value="324.00">
							<input type="hidden" name="option_select4" value="Golf+BBQ+Deluxe+Fri+Alumni">
							<input type="hidden" name="option_amount4" value="344.00">
							<input type="hidden" name="option_select5" value="Golf+BBQ+Lake-View+Sat+Alumni">
							<input type="hidden" name="option_amount5" value="324.00">
							<input type="hidden" name="option_select6" value="Golf+BBQ+Deluxe+Sat+Alumni">
							<input type="hidden" name="option_amount6" value="344.00">
							<input type="hidden" name="option_select7" value="Golf+BBQ+Lake-View+2Nights+Alumni">
							<input type="hidden" name="option_amount7" value="533.00">
							<input type="hidden" name="option_select8" value="Golf+BBQ+Deluxe+2Nights+Alumni">
							<input type="hidden" name="option_amount8" value="573.00">
							<input type="hidden" name="option_index" value="0">
							<input type="submit" name="submit" value="Pay via Paypal" class="btn btn-primary">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</div>
					<div class="col-md-4">
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_xclick">
							<input type="hidden" name="business" value="pkpalum@gmail.com">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="button_subtype" value="services">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
							<table>
								<tr><td class="table-title"><input type="hidden" name="on0" value="Golf">Golf Gear</td></tr><tr><td><select class="form-control" name="os0">
									<option value="Golf+Clubs">Golf Clubs Rental $20.00 CAD</option>
								</select> </td></tr>
							</table>
							<input type="hidden" name="currency_code" value="CAD">
							<input type="hidden" name="option_select0" value="Golf+Clubs">
							<input type="hidden" name="option_amount0" value="20.00">
							<input type="hidden" name="option_index" value="0">
							<input type="submit" name="submit" value="Pay via Paypal" class="btn btn-primary">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	
	<footer>
		<h2>Let’s make sure to thank Brother Jim Ross and his family for sharing their home and hosting this great event!</h2>
	</footer>
</html>