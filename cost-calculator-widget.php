<?php /* Reusable cost calculator widget (used on homepage + cost-calculator page) */ ?>
<div class="calc-card">
    <form id="calcForm" class="calc-form" novalidate>
        <div class="calc-row">
            <div class="calc-field">
                <label for="calcDistance">Where are you moving?</label>
                <select id="calcDistance" class="form-control" required>
                    <option value="local" selected>Local — within Visakhapatnam</option>
                    <option value="300">Vizag → up to 300 km</option>
                    <option value="700">Vizag → 300–700 km</option>
                    <option value="1200">Vizag → 700–1200 km</option>
                    <option value="1800">Vizag → 1200+ km</option>
                </select>
            </div>
            <div class="calc-field">
                <label for="calcSize">Home / move size</label>
                <select id="calcSize" class="form-control" required>
                    <option value="few">Few items</option>
                    <option value="1rk">1 RK</option>
                    <option value="1bhk" selected>1 BHK</option>
                    <option value="2bhk">2 BHK</option>
                    <option value="3bhk">3 BHK</option>
                    <option value="4bhk">4 BHK / Villa</option>
                    <option value="office">Office / Commercial</option>
                </select>
            </div>
        </div>
        <div class="calc-row">
            <div class="calc-field">
                <label for="calcFloor">Floor access</label>
                <select id="calcFloor" class="form-control">
                    <option value="1">Ground floor / lift available</option>
                    <option value="1.1">Upper floor, no lift</option>
                </select>
            </div>
            <div class="calc-field">
                <label>Add-on services</label>
                <div class="calc-checks">
                    <label><input type="checkbox" id="calcPacking"> Full packing (material + labour)</label>
                    <label><input type="checkbox" id="calcStorage"> Storage</label>
                    <label><input type="checkbox" id="calcVehicle"> Vehicle transport</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-accent calc-btn">Calculate Estimate</button>
    </form>
    <div class="calc-result" id="calcResult" hidden>
        <div class="calc-amount-label">Estimated moving cost</div>
        <div class="calc-amount" id="calcAmount"></div>
        <p class="calc-note">This is an approximate estimate based on typical moves. Your final price is confirmed after a free survey — with no hidden charges.</p>
        <a id="calcWa" class="btn btn-whatsapp" target="_blank" rel="noopener" href="#">💬 Get Exact Quote on WhatsApp</a>
    </div>
</div>
