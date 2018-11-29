<div id="cs-raw-content" class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
	<h4 class="mtn">Estimated Sales Price: $<span id="za-estimated">50000</span></h4>
	<div class="row">
		<div class="slidecontainer col-xs-12 col-sm-12">
			<input type="hidden" id="za-slide-price" class="slider"/>
		</div>
	</div>
	<h4 class="mtn">Our Full Service Flat Fee: $<span id="agent-fee">1500</span></h4>
	<h4 class="mtn">3% Buyer Agent's Fee: $<span id="buyer-fee">1500</span></h4>
	<hr>
	<h1 class="mtn">Your Savings: $<span id="savings">0</span></h1>
	<p class="small">Savings calculator shows how much money a seller can save compared to a traditional 6% listing. If we sell your home, the above Buyer Agent's Fee is reduced to a flat $2,500 fee, no matter the sales price.</p>
</div>
<script>
	var $range = jQuery("#za-slide-price");
	
	$range.ionRangeSlider({
		// type: "single",
		grid: false,
		min: 50000,
		max: 2000000,
		step: 10000,
		prefix: "$",
		from: 100000,
		// to: '<?php echo $maxListPrice ?>',
		// onChange: function(data){
			// jQuery( "#za-estimated" ).html(data.from);
		// },
		// onFinish: function(data){
			// jQuery('#zpa-search-filter-form').submit();
		// },
	});
</script>

<script id="cornerstone-custom-page-js">;
	var slider=document.getElementById('za-slide-price'),
		sliderValue=document.getElementById('za-estimated'),
		agentFee=document.getElementById('agent-fee'),
		buyerFee=document.getElementById('buyer-fee'),
		savings=document.getElementById('savings');
	
	sliderValue.innerHTML=slider.value;
	if(slider.value<100000){
		agentFee.innerHTML='1500';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+1500)
	};
	if(slider.value<199999&&slider.value>=100000){
		agentFee.innerHTML='1995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+1995)
	};
	if(slider.value<299999&&slider.value>=200000){
		agentFee.innerHTML='2995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+2995)
	};
	if(slider.value<399999&&slider.value>=300000){
		agentFee.innerHTML='3995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+3995)
	};
	if(slider.value<499999&&slider.value>=400000){
		agentFee.innerHTML='4995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+4995)
	};
	if(slider.value<599999&&slider.value>=500000){
		agentFee.innerHTML='5995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+5995)
	};
	if(slider.value<699999&&slider.value>=600000){
		agentFee.innerHTML='6995';
		savings.innerHTML=(((slider.value/100)*6)-((slider.value/100)*3)+6995)
	};
	if(slider.value>=700000){
		agentFee.innerHTML=slider.value/100;
		savings.innerHTML=((slider.value/100)*6)-((slider.value/100)*4)
	};
	buyerFee.innerHTML=(slider.value/100)*3;
	slider.oninput=function(){
		sliderValue.innerHTML=this.value;
		buyerFee.innerHTML=(slider.value/100)*3;
		if(slider.value<100000){
			agentFee.innerHTML='1500';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+1500)
		};
		if(slider.value<199999&&slider.value>=100000){
			agentFee.innerHTML='1995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+1995)
		};
		if(slider.value<299999&&slider.value>=200000){
			agentFee.innerHTML='2995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+2995)
		};
		if(slider.value<399999&&slider.value>=300000){
			agentFee.innerHTML='3995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+3995)
		};
		if(slider.value<499999&&slider.value>=400000){
			agentFee.innerHTML='4995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+4995)
		};
		if(slider.value<599999&&slider.value>=500000){
			agentFee.innerHTML='5995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+5995)
		};
		if(slider.value<699999&&slider.value>=600000){
			agentFee.innerHTML='6995';
			savings.innerHTML=((slider.value/100)*6)-(((slider.value/100)*3)+6995)
		};
		if(slider.value>=700000){
			agentFee.innerHTML=slider.value/100;
			savings.innerHTML=((slider.value/100)*6)-((slider.value/100)*4)
		}
	};
</script>