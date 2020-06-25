@extends('layouts.app')

@section('content')
<div style="background-image:url(../image/barbecue.jpg); ">
<h1 class="main-header text-center text-danger p-5 m-0">Զամբյուղ</h1>
      <div class="container-sm p-3 bg-white ">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
            <div class="mr-auto">
              <div class="text-dark modal-basket-h1 mb-2">
                <b>Խոզի խորոված</b><span class="text-danger"> X 5</span>
              </div>
              <div class="py-0 modal-basket-p">
                xxxx դրամ
              </div>
            </div>
            <div>
              <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          </div>    
          <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
            <div class="mr-auto">
              <div class="text-dark modal-basket-h1 mb-2">
                <b>Խոզի խորոված</b><span class="text-danger"> X 3</span>
              </div>
              <div class="py-0 modal-basket-p">
                xxxx դրամ
              </div>
            </div>
            <div>
              <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          </div>  
          <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
            <div class="mr-auto">
              <div class="text-dark modal-basket-h1 mb-2">
                <b>Խոզի խորոված</b><span class="text-danger"> X 2</span>
              </div>
              <div class="py-0 modal-basket-p">
                xxxx դրամ
              </div>
            </div>
            <div>
              <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          </div>  
          <div class="alert alert-light m-0 p-3 d-flex border-top-0 modal-basket-border" id="alert" role="alert">
            <div class="mr-auto">
              <div class="text-dark modal-basket-h1 mb-2">
                <b>Խոզի խորոված</b><span class="text-danger"> X 3</span>
              </div>
              <div class="py-0 modal-basket-p">
                xxxx դրամ
              </div>
            </div>
            <div>
              <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          </div>
          <div class="text-center my-3"><b class="text-dark modal-basket-footer-p ">Ընդամենը՝ xxxxx դրամ</b></div>       
        </div>
        <hr class="col-8 mx-auto">
        <h3 class="text-center m-2 text-danger">Անհատական տվյալներ</h3>
        <div class="form-row">
          <div class="form-group col-lg-8 mx-auto">
            <label for="modalName">Անուն</label>
            <input type="text" class="form-control" id="modalName" value="Անուն">
          </div>
          <div class="form-group col-lg-8 mx-auto">
            <label for="inputCity">Հեռախոսահամար</label>
            <input type="text" class="form-control" id="inputCity" value="(+374)77 12 34 56">
          </div>
          <div class="form-group col-lg-8 mx-auto">
            <label for="inputAddress">Հասցե</label>
            <input type="text" class="form-control" id="inputAddress" value="Ք. Երևան, ...">
          </div>
        </div>
        <hr class="col-8 mx-auto">
        <h3 class="text-center m-4 text-danger">Ընտրել վճարման տարբերակը</h3>
        <div class=" d-flex justify-content-center mt-5">
          <ul class="nav nav-pills mb-3 col-lg-7" id="pills-tab" role="tablist">
            <li class="nav-item text-center col-lg">
              <a class="nav-link a pt-4" id="pills-cash-tab" data-toggle="pill" href="#pills-cash" role="tab" aria-controls="pills-cash" aria-selected="true"><i class="fas fa-wallet"></i><p class=" pt-3">Կանխիկ</p></a>
            </li>
            <li class="nav-item text-center col-lg">
              <a class="nav-link a pt-4" id="pills-card-tab" data-toggle="pill" href="#pills-card" role="tab" aria-controls="pills-card" aria-selected="false"><i class="fab fa-cc-visa"></i><p class=" pt-3">Անկանխիկ</p></a>
            </li>
          </ul>
        </div>
        <div>      
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-cash" role="tabpanel" aria-labelledby="pills-cash-tab"></div>
            <div class="tab-pane fade" id="pills-card" role="tabpanel" aria-labelledby="pills-card-tab">
              <div class="row col-lg-8 mx-auto">
                <div class="col-lg-2">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link a text-center active" id="v-pills-visa-tab" data-toggle="pill" href="#v-pills-visa" role="tab" aria-controls="v-pills-visa" aria-selected="true">
                      <i class="fab fa-cc-visa"></i>
                    </a>
                    <a class="nav-link a text-center" id="v-pills-mastercard-tab" data-toggle="pill" href="#v-pills-mastercard" role="tab" aria-controls="v-pills-mastercard" aria-selected="false">
                      <i class="fab fa-cc-mastercard"></i>
                    </a>
                    <a class="nav-link a text-center" id="v-pills-paypal-tab" data-toggle="pill" href="#v-pills-paypal" role="tab" aria-controls="v-pills-paypal" aria-selected="false">
                      <i class="fab fa-cc-paypal"></i>
                    </a>
                    <a class="nav-link a text-center" id="v-pills-pay-tab" data-toggle="pill" href="#v-pills-pay" role="tab" aria-controls="v-pills-pay" aria-selected="false">
                      <i class="fab fa-cc-amazon-pay"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-10 ">
                  <div class="tab-content px-lg-5" id="v-pills-tabContent">
                    <!-- visa -->
                    <div class="tab-pane fade show active pt-4" id="v-pills-visa" role="tabpanel" aria-labelledby="v-pills-visa-tab">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="0000 0000 0000 0000">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="Անուն Ազգանուն">
                      <div class="d-flex justify-content-between">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="mm/yy">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="CVV">  
                      </div>        
                    </div>
                    <!-- mastercard -->
                    <div class="tab-pane fade show pt-4" id="v-pills-mastercard" role="tabpanel" aria-labelledby="v-pills-mastercard-tab">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="0000 0000 0000 0000">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="Անուն Ազգանուն">
                      <div class="d-flex justify-content-between">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="mm/yy">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="CVV">  
                      </div>        
                    </div>
                    <!-- paypal -->
                    <div class="tab-pane fade show pt-4" id="v-pills-paypal" role="tabpanel" aria-labelledby="v-pills-paypal-tab">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="0000 0000 0000 0000">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="Անուն Ազգանուն">
                      <div class="d-flex justify-content-between">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="mm/yy">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="CVV">  
                      </div>        
                    </div>
                    <!-- pay -->
                    <div class="tab-pane fade show pt-4" id="v-pills-pay" role="tabpanel" aria-labelledby="v-pills-pay-tab">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="0000 0000 0000 0000">
                      <input type="text" name="" class="order-input-name col-12 my-3" placeholder="Անուն Ազգանուն">
                      <div class="d-flex justify-content-between">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="mm/yy">
                        <input type="text" name="" class="order-input-name col-5 mx-0 my-3" placeholder="CVV">  
                      </div>        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-5 mb-3 w-100"><a href="home" type="submit" class="btn btn-danger">Պատվիրել</a></div>
      </div>
</div>
@endsection

