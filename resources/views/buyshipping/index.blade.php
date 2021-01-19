@extends('layouts.app')

@section('content')

<div class="bg-image page-title">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
      <a href="{{ url("/buy-shipping") }}"><h1>Buy & Shipping</h1></a>
      <div class="float-right">
        <a href="index.html">
            <i class="fa fa-home fa-lg"></i>
        </a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="03_about.html">Buy & Shipping
        </a>
      </div>
    </div>
  </div>
    </div>
  </div>
  


<!-- service details -->
<section class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 content-side order-lg-2">
          <div class="image-block">
            <div class="row">
              <div class="col-lg-12">
                <div class="image"> 
                    <img src="{{ asset('images/buying-shipping.jpg') }}" alt="">
                 </div>
              </div>
            </div>
          </div>
          <div class="text-block-two">
            <h3>Overview</h3>
            <div class="text">
              <p>Use this service if you would like us to buy goods for you from U.S. online stores and ship them to your destination.</p>
              <p>Use DISCOUNT CODE NEWYEAR to get 20% OFF Shipping Costs on all Buy & Ship orders now! Click here for more details.   You can now shop with peace of mind because all purchases are fully insured against loss or damage while on transit! </p>
              <p>Go ahead and tell us about the products you would like to acquire below. We will get back to you within 24 to 48 hours with the total cost of delivering the order to you, including customs clearance and shipping fees. </p>
            </div>
          </div>
          <div class="features">
            <h3>How it works</h3>
            <div class="text">To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault.</div>
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                  <div class="icon"><span class="icofont-user-male"></span></div>
                  <h5>Step 1</h5>
                  <h4>Create an account</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                  <div class="icon"><span class="icofont-ui-file"></span></div>
                  <h5>Step 2</h5>
                  <h4>Request a quote</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                  <div class="icon"><span class="icofont-prestashop"></span></div>
                  <h5>Step 3</h5>
                  <h4>We purchase your order</h4>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="icon-box">
                  <div class="icon"><span class="icofont-ship"></span></div>
                  <h5>Step 4</h5>
                  <h4>We ship and deliver</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="text-block-two">
            <h3>Buy & Ship Delivery Timeline</h3>
            <div class="text">
              <p>Would you like us to purchase goods for you from a US online store hassle-free? Are you having difficulty making purchases from a US online store? Our Buy and Ship service is designed just for you. Simply begin by telling us the products you want, where we should buy them from and then we'll do the rest.</p>
              <p>Most Buy and Ship orders typically take 15 to 20 Business days, from purchase to delivery at your destination. Items that take more than two weeks to be delivered to our U.S. Warehouse by the seller may take up to 30 Business days to deliver in Kenya. </p>
            </div>
          </div>
          <div class="text-block-two">
            <h3>Shipping Policy</h3>
            <div class="text">
            <p>We ship goods out to Kenya every week on Wednesday. If you order contains one item, we will ship it on the very next Wednesday after it arrives at our US warehouse. </p>
            <p>If your order contains multiple items, we will ship each item on the Wednesday after it arrives at our US warehouse. Therefore items that arrive at our US warehouse early will be delivered to you earlier.</p>
            <p>If the items in your order are related or are used together (e.g. a laptop and a laptop bag), we may wait for all items to arrive and then ship them to you together. If you require any clarification about our shipping policy, kindly email ust at customercare@istore.com.</p>
            </div>
          </div>
          <div class="text-block-two">
            <h3>Return Policy</h3>
            <div class="text">
              <p>It is important that you read our Return Policy before placing an order with us. Due to the risks associated with purchasing used/refurbished goods, goods from eBay sellers or goods from any unauthorized sellers/dealers, we do not accept returns of such purchases under any circumstances. Click here to read our full return policy. When you place an order with us, you will be prompted to agree to our Return Policy.</p>
              <p>PROHIBITED ITEMS - There are certain items we are unable to ship due to various regulations. Click here to view a list of prohibited items.</p>
            </div>
          </div>
          <div class="text-block-two">
            <h3>We ship perfume</h3>
            <div class="text">
              <p>We are able to ship perfume, cologne, body mists and aftershave from the US to Kenya. We ship them to Kenya once a month on the last Wednesday of every month. </p> 
              <p>If you have any questions about our Buy and Ship service, kindly email us at customercare@istore.com.</p>
            </div>
          </div>
          <div class="text-block-two">
            <h3>Pricing</h3>
            <div class="text">
              <p>Transparency is a core part of our business. Below is a clear breakdown of the costs you can expect to see in your Buy and Ship invoice.</p>
              <p>Cost of Item >> This is the total cost of the item you want to purchase. It is paid directly to the serller of the items you wish to purchase.</p>
              <p>Total Service Cost >> This is a fee paid to Savo Store for handling and facilitating this service. It is charged at 18% of the Cost of Item(s). This fee also covers full insurance coverage for your order while on transit from our US office to our Nairobi office.</p> 
              <p>Total Shipping Cost >> This is the total transportation cost of your order from our US office to our Nairobi office. The amount quoted as the Total Shipping Cost is final unless otherwise stated.</p>
              <p>VAT (14%) >> VAT is calculated as a percentage of the Total Service Cost + Total Shipping Cost charged by Savo Store.</p>
              <p>Order Total >> This is the total of all the line items above. It is the total amount payable for your order. For orders with a value of 100,000 KES or more, you can pay 50% when placing the order and the final 50% when the order arrives in Kenya.</p> 
              <p>If you have any questions at all, email us at customercare@istore.com for more information.</p>
            </div>
          </div>
        </div>
        <aside class="col-lg-4">
          <div class="service-sidebar">
            <div class="widget widget_categories-two">
              <h4 class="widget_title">Services</h4>
              <div class="widget-content">
                <ul class="categories-list">
                  <li class="active"><a href="air-freight.html"><i class="icofont-airplane-alt"></i> Buy & Shipping </a></li>
                  <li><a href="ocean-freight.html"><i class="icofont-ship"></i> Shipping Only </a></li>
                </ul>
              </div>
            </div>
            <div class="widget pdf-widget">
              <h4 class="widget_title">Downloads</h4>
              <div class="text">Provide reference materials for customers
                logistics operations.</div>
              <div class="row">
                <div class="col-sm-6 column">
                  <div class="content">
                    <div class="icon">
                        <img src="{{ asset('images/icon-8.png') }}" alt="">
                    </div>
                    <h4>Sender <br>
                      Instructions</h4>
                  </div>
                </div>
                <div class="col-sm-6 column">
                  <div class="content">
                    <div class="icon">
                        <img src="{{ asset('images/icon-8.png') }}" alt="">
                    </div>
                    <h4>Sender <br>
                      Instructions</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="widget getaquote-widget">
              <h4 class="widget_title">Get a Quote</h4>
              <div class="text">Get immediate quotes & book shipment.</div>
              <form>
                <div class="form-group">
                      <span class="label">Item</span>
                      <input type="text" class="form-control" id="item" name="item" placeholder="Type Here" required="">
                  </div>
                  <div class="form-group">
                      <span class="label">Quantity</span>
                      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" required="">
                  </div>
                  <div class="form-group">
                      <span class="label">Web Url</span>
                      <input type="text" class="form-control" id="weburl" name="weburl" placeholder="Type Here" required="">
                  </div>
                  <div class="form-group">
                      <span class="label">More Info (Size, SKU, Color etc)</span>
                      <input type="text" class="form-control" id="moreinfo" name="moreinfo" placeholder="Write Here" required="">
                  </div>
                  <div class="form-group">
                      <span class="label">Item Cost in USD</span>
                      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="$0.00" required="">
                  </div>
  <!--                 <div class="form-group">
                      <span class="label">Origin Country</span>
                      <select class="selectpicker" name="make">
                          <option value="*">Select Country</option>
                          <option value=".category-1">United States</option>
                          <option value=".category-3">United Kingdom</option>
                          <option value=".category-4">France</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <span class="label">Destination Country</span>
                      <select class="selectpicker" name="make">
                          <option value="*">Select Country</option>
                          <option value=".category-1">United States</option>
                          <option value=".category-3">United Kingdom</option>
                          <option value=".category-4">France</option>
                      </select>
                  </div> -->
                  <div class="form-group">
                      <button type="submit" class="theme-btn btn-style-one"><span><i class="icofont-arrow-left"></i>Get A Quote</span></button>
                      <p class="submit-text">Submit your entry and we will get back to you shortly with the cost of delivering this order to you.</p>
                  </div>
              </form>
          </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  
  


@endsection
