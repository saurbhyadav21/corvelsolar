<?php include "header.php"; ?>
<!-- Solar Calculator Section -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
    }

    .solar-calculator-sec {
        background: linear-gradient(to bottom right, #f6fafe, #e3f2fd);
        padding: 60px 0;
    }

    .solar-calculator-sec h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #005F59;
        text-align: center;
        margin-bottom: 20px;
    }

    .slider-wrapper {
        max-width: 500px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .slider-wrapper h2 {
        font-size: 1.5rem;
        color: #333;
        margin-bottom: 20px;
    }

    .slider {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        border-radius: 4px;
        background: #ddd; /* Remove this */
        outline: none;
        transition: background 0.3s ease-in-out;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 22px;
        height: 22px;
        background: #ff8000;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .slider::-moz-range-thumb {
        width: 22px;
        height: 22px;
        background: #ff8000;
        border-radius: 50%;
        cursor: pointer;
    }

    .slider-wrapper p {
        font-size: 1.1rem;
        color: #333;
    }

    .info-grid-section {
        background-color: #fff;
    }

    .info-box {
        display: flex;
        align-items: center;
        background: #f8f9fa;
        padding: 15px 25px;
        border-radius: 12px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.03);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    
    .info-boxes {
        display: flex;
        align-items: center;
        background: #f8f9fa;
        padding: 15px 20px;
        border-radius: 12px;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.03);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .info-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    }

    .info-box .value {
        flex: 1;
    }

    .info-box .value p {
        font-size: 20px;
        font-weight: 600;
        color: #005F59;
        margin: 0;
    }

    .info-box .value hr {
        border-top: 1px solid #ccc;
        margin: 8px 0;
    }

    .info-box .value p:last-child {
        font-size: 15px;
        color: #333333;
        margin-top: 0;
    }

    .info-icon {
        width: 56px;
        height: auto;
        margin-left: 15px;
    }
    
    .info-icons {
        width: 36px;
        height: auto;
        margin-left: 15px;
    }

    .solar-calculator-block {
        text-align: center;
        padding: 20px;
        background: #fff;
        border-radius: 16px;
        margin-bottom: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease-in-out;
        height: 100%;
    }
    
    

    .solar-calculator-block:hover {
        transform: scale(1.03);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.06);
    }

    .solar-calculator-block .icon img {
        width: 50px;
        margin-bottom: 15px;
    }

    .solar-calculator-block h5 {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.4;
        font-weight: 600;
    }
    
    .slider-input-box {
        width: 80px;
        padding: 6px 12px;
        font-size: 1.1rem;
        border: 2px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: border-color 0.3s ease;
        text-align: center;
    }
    
    .slider-input-box:focus {
        border-color: #ff8000;
        box-shadow: 0 0 0 3px rgba(255, 128, 0, 0.2);
    }
    
    .enhanced-input-wrapper {
        max-width: 127px;
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        overflow: hidden;
        border: 1px solid #ccc;
        transition: border 0.3s ease;
    }
    
    .enhanced-input-wrapper:focus-within {
        border: 1px solid #ff8000;
        box-shadow: 0 0 0 3px rgba(255, 128, 0, 0.2);
    }
    
    .slider-input-enhanced {
        border: none;
        outline: none;
        font-size: 1rem;
        text-align: right;
        padding: 0.5rem 0rem;
    }
    
    .input-group-text {
        background-color: #fff;
        border: none;
        font-weight: 600;
        color: #444;
    }

    
    @media (max-width: 576px) {
        .slider-input-box {
            width: 100%;
            margin-top: 10px;
        }
    }


    @media (max-width: 767px) {
     Adjust padding and margin of the solar calculator section 
    .solar-calculator-sec {
        padding: 40px 0; /* Reduced padding for mobile */
    }

    /* Main Heading */
    .solar-calculator-sec h1 {
        font-size: 1.8rem; /* Adjusted font size */
        margin-bottom: 10px; /* Reduced margin */
    }

     /*Slider wrapper */
    .slider-wrapper {
        padding: 20px; /* Reduced padding */
        max-width: 100%; /* Ensure it fits mobile screens */
    }

    .slider-wrapper h2 {
        font-size: 1.4rem; /* Adjusted font size */
    }

    /* Adjust slider and input group */
    .slider-input-box {
        width: 100%; /* Full width input box */
        margin-top: 10px; /* Reduced gap between elements */
    }

    .d-flex {
        gap: 15px; /* Reduced gap between slider and input */
    }

    .info-grid-section .row {
        display: grid;
        grid-template-columns: repeat(2, 1fr); /* 2 columns */
        gap: 10px; /* Reduced gap between info boxes */
    }

    .info-grid-section .col-md-4 {
        grid-column: span 1; /* Each column spans 1 unit */
    }

    /* Info Box Styling */
    .info-box {
        flex-direction: row; /* Align logo to the right of the text */
        text-align: left; /* Align text to the left */
        justify-content: space-between; /* Ensure logo is on the right */
        padding: 15px 20px; /* Reduced padding */
        margin-bottom: 15px; /* Reduced margin */
    }

    /* Adjust font sizes inside the info box */
    .info-box .value p {
        font-size: 14px; /* Adjusted font size */
        font-weight: 600;
        color: #005F59;
        margin: 0;
        flex: 1; /* Allow text to take available space */
    }

    .info-box .value hr {
        border-top: 1px solid #ccc;
        margin: 8px 0;
    }

    .info-box .value p:last-child {
        font-size: 12px; /* Adjusted font size */
        color: #333333;
        margin-top: 0;
    }

    /* Adjust the icon size and margin for mobile */
    .info-icon {
        width: 40px; /* Adjusted size for mobile */
        height: auto;
        margin-left: 15px; /* Maintain space between text and icon */
    }

    /* Secondary Title (info-box headings) */
    .solar-calculator-block h5 {
        font-size: 1rem; /* Adjusted font size */
        color: #333;
        line-height: 1.4;
        font-weight: 600;
    }

    /* Solar Calculator Blocks */
    .solar-calculator-block {
        padding: 15px; /* Reduced padding */
        margin-bottom: 15px; /* Reduced margin */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05); /* Reduced shadow */
    }

    /* Adjust logo size */
    .header__logo img {
        width: 120px; /* Adjusted logo size for mobile */
        height: auto;
    }

    /* Footer Logo Size */
    .footer-logo img {
        width: 100px; /* Adjusted footer logo size for mobile */
        height: auto;
    }
}

</style>
    <div class="solar-calculator-sec">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h1>Solar Calculator</h1>

            <div class="col-12 text-center py-5">
                <div class="slider-wrapper">
                    <h2 class="mb-4">Enter your Bill Amount</h2>

                    <!-- Slider & Input Group -->
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3 w-100">
                        <input type="range" min="0" max="1000000" step="1000" value="1000" class="slider flex-grow-1" id="solarSlider">

                        <div class="input-group enhanced-input-wrapper">
                            <span class="input-group-text">Rs.</span>
                            <input type="number" min="0" max="1000000" step="1000" value="1000" id="solarInput" class="form-control slider-input-enhanced" />
                        </div>
                    </div>

                    <p class="mt-3">Value: Rs. <span id="sliderValue">0</span> </p>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="info-grid-section py-5">
    <div class="container">
        <div class="row text-left text-md-start">
            <!-- For each info box, we set dynamic IDs to update the values dynamically -->
            
             <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="powerValue">Rs. 1,000</p>
                        <hr>
                        <p>Power Consumption</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/monthlyCostSavings.jpg" alt="Power" class="info-icon">
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="areaValue">80 sq.ft</p>
                        <hr>
                        <p>Area</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/location.png" alt="Locations" class="info-icon">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="unitsGenerated">4 units/day</p>
                        <hr>
                        <p>Units Generated</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/unitsGenerated.png" alt="Associates" class="info-icon">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="annualUnits">1500 units/year</p>
                        <hr>
                        <p>Annual Units</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/countries.jpg" alt="Countries" class="info-icon">
                </div>
            </div>

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="unitRate">8 Rs/unit</p>
                        <hr>
                        <p>Unit Rate</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/unitRate.jpg" alt="Established In" class="info-icon">
                </div>
            </div>

            <!--<div class="col-md-4 col-sm-6 mb-4">-->
            <!--    <div class="info-box">-->
            <!--        <div class="value">-->
            <!--            <p id="monthlySavings">Rs. 1,000</p>-->
            <!--            <hr>-->
            <!--            <p>Monthly Savings</p>-->
            <!--        </div>-->
            <!--        <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/monthlyCostSavings.jpg" alt="Storage Area" class="info-icon">-->
            <!--    </div>-->
            <!--</div>-->

            <div class="col-md-4 col-sm-6 mb-4">
                <div class="info-box">
                    <div class="value">
                        <p id="annualSavings">Rs. 12,000</p> <!-- This is the placeholder for annual savings -->
                        <hr>
                        <p>Annual Savings</p>
                    </div>
                    <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/annualSavings.jpg" alt="Miles Covered" class="info-icon">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-padding light-bg" id="last-div-solar-calculating">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="solar-calculator-block">
                        <div class="icon">
                            <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/icon-9.png" alt="Evaska Accurate Savings Calculator">
                        </div>
                        <h5 class="secondary-title mb-0">Save on <br>
                            Electricity Bills</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="solar-calculator-block">
                        <div class="icon">
                            <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/icon-10.png" alt="Evaska Accurate Savings Calculator">
                        </div>
                        <h5 class="secondary-title mb-0">Become Energy <br>
Independent</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="solar-calculator-block">
                        <div class="icon">
                            <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/icon-11.png" alt="Evaska Accurate Savings Calculator">
                        </div>
                        <h5 class="secondary-title mb-0">Reduce Carbon <br>
Footprints</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="solar-calculator-block">
                        <div class="icon">
                            <img src="https://www.evaskaenergy.com/website/assets/img/solar-calculator/icon-12.png" alt="Evaska Accurate Savings Calculator">
                        </div>
                        <h5 class="secondary-title mb-0">Reduce Pollution & <br>
Save Trees</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"; ?>



<script>
       var sessionCheck = sessionStorage.getItem("sourceurlSession");
       
       if(sessionCheck == null)
       {
            sessionStorage.setItem("sourceurlSession", window.location.href);
            var urlinfield = $(".source_url").val(window.location.href);
       }
       else
       {
       	var urlinfield = $(".source_url").val(sessionCheck);
       }
       
       console.log('urlinfield:' + urlinfield);
       console.log('sessionCheckvalue: ' + sessionCheck)
</script>

<script>
	$(document).ready(function() {

	$("#popformid").on("submit", function(){
		$('#popbtnFetch').prop("disabled", true);
		$('#popbtnFetch').html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Please Wait...`
      );
	});//submit
});
</script>

<script>
    const slider = document.getElementById('solarSlider');
    const sliderInput = document.getElementById('solarInput');
    const sliderValueText = document.getElementById('sliderValue');

    function updateSliderStyles() {
        const value = slider.value;
        const min = slider.min;
        const max = slider.max;
        const percentage = ((value - min) / (max - min)) * 100;
        slider.style.background = `linear-gradient(to right, #ff8000 0%, #ff8000 ${percentage}%, #ddd ${percentage}%, #ddd 100%)`;
    }

    function updateValues(value) {
        value = parseInt(value);

        slider.value = value;
        sliderInput.value = value;
        sliderValueText.textContent = value.toLocaleString();
        
        document.getElementById('powerValue').textContent = `${value / 1000} kW`;
        document.getElementById('areaValue').textContent = `${80 * value / 1000} sq.ft`;
        document.getElementById('unitsGenerated').textContent = `${4 * value / 1000} units/day`;
        document.getElementById('annualUnits').textContent = `${1500 * value / 1000} units/year`;
        document.getElementById('unitRate').textContent = `8 Rs/unit`;
        // document.getElementById('powerValue').textContent = `Rs. ${value / 1000}`;
        document.getElementById('annualSavings').textContent = `Rs. ${12000 * value / 1000}`;

        updateSliderStyles();
    }

    // Slider interaction
    slider.addEventListener('input', (e) => updateValues(e.target.value));

    // Input interaction
    sliderInput.addEventListener('input', (e) => updateValues(e.target.value));

    // Initialize
    updateValues(slider.value);
</script>