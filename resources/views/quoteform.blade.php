<section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
    <div class="container">
        <div class="row justify-content-end">
            <!-- Contact wrapper -->
            <div class="col-xl-8 col-lg-9">
                <div class="contact-form-wrapper">
                    <!-- From tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-50">
                                <span>Get a Quote For Free</span>
                                <h2 style="color:#805BA1;">Request a Free Quote</h2>
                                <p>Silk cargos provides you with the best services and best rates. Requset your quote now</p>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <form action="{{route('quotes.submit')}}" class="contact-form" method="post">
                        @csrf
                        <div class="row ">
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-form">
                                    <input type="text" placeholder="Contact Number" name="contact" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="select-items">
                                    <select name="freight" id="select1" required>
                                        <option value="">Freight Type</option>
                                        <option value="Catagories One">Catagories One</option>
                                        <option value="Catagories Two">Catagories Two</option>
                                        <option value="Catagories Three">Catagories Three</option>
                                        <option value="Catagories Four">Catagories Four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="input-form">
                                    <input type="text" placeholder="City of Departure" name="departure" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Incoterms" name="incoterms" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Weight(KG)" name="weight" required>
                                </div>
                            </div>
                            <!-- Height Width length -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Height(CM)" name="height" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="Width(CM)" name="width" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="input-form">
                                    <input type="text" placeholder="length(CM)" name="length" required>
                                </div>
                            </div>
                            <!-- Radio Button -->
                            <div class="col-lg-12">
                                <div class="radio-wrapper mb-30 mt-15">
                                    <label>Extra services:</label>
                                    <div class="select-radio">
                                        <div class="radio">
                                            <input id="radio-1" name="extra" type="radio" checked="" value="Freight">
                                            <label for="radio-1" class="radio-label">Freight</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-2" name="extra" type="radio" value="Express Delivery">
                                            <label for="radio-2" class="radio-label">Express Delivery</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-4" name="extra" type="radio" value="Insurance">
                                            <label for="radio-4" class="radio-label">Insurance</label>
                                        </div>
                                        <div class="radio">
                                            <input id="radio-5" name="extra" type="radio" value="Packaging">
                                            <label for="radio-5" class="radio-label">Packaging</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <!-- Button -->
                            <div class="col-lg-12">
                                <button name="submit" class="submit-btn">Request a Quote</button>
                            </div>
                        </div>
                    </form>	
                </div>
            </div>
        </div>
    </div>
</section>