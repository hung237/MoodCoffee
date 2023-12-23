@extends('index')
@section('title', 'Page about')
@section('main')
    <section style="padding: 100px 0;" class="bg-sub text-white">
        <div style="margin-top: 50px" class="container">
            <div class="row bg-about">
                <div class="col-4 position-relative">
                    <div class="box-about position-absolute top-0 start-0 bg-sub">
                        <h4 class="text-white fs-5">Chào Mừng Bạn tới MoodCoffee</h4>
                        <hr class="bg-main" style="border: none; height: 2px; width: 130px;">
                        <h2 class="my-4"><span class=" text-main fw-nold">MoodCoffee</span> - Nguồn cảm hứng mới mỗi ngày!</h2>
                        <p style="line-height: 1.6; font-size: 15px">Tận hưởng không khí tinh tế và hương vị cà phê độc đáo. Chúng tôi tự hào mang đến trải nghiệm cà phê chất lượng cao, đa dạng, và thoải mái. 
                        <br><br>Ghé thăm để khám phá thế giới cà phê đầy ý nghĩa!</p>
                    </div>
                </div>
                <div class="col-8">
                    <img style="border-radius: 20px" src="/assets/images/about.jpg" width="100%" height="auto">
                </div>
            </div>
            <div class="row my-5 text-center px-5">
                <div class="col9">
                    <h2 class="text-main mt-5">Sứ Mệnh & Tầm Nhìn</h2>
                    <p class="m-3 px-5 text-92">MoodCoffee cam kết mang lại trải nghiệm cà phê độc đáo, tạo nên khoảnh khắc ngon miệng và bổ ích. Chúng tôi đặt ra sứ mệnh là kết nối cộng đồng thông qua niềm đam mê cùng hương vị cà phê đỉnh cao, hướng tới một tương lai năng động và sáng tạo.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="box-img-about col-4 bg-about position-relative">
                    <img src="/assets/images/about3.jpg" width="100%" height="auto">
                    <div class="line-about position-absolute top-50 end-0 translate-middle"></div>
                </div>
                <div class="col-8 ps-5">
                    <h3>Sứ Mệnh</h3>
                    <p class="text-92">Sứ mệnh của chúng tôi là tạo ra không gian thân thiện, nơi mọi người tìm thấy niềm vui và năng lượng từ những ly cà phê đặc biệt. Chúng tôi hướng đến việc kết nối cộng đồng và mang lại trải nghiệm cà phê độc đáo, góp phần làm đẹp cuộc sống hàng ngày.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-8 pe-5">
                    <h3>Tầm nhìn</h3>
                    <p class="text-92">Tầm nhìn của chúng tôi là trở thành điểm đến lý tưởng cho những người yêu cà phê và nơi tinh thần sáng tạo phát triển. Chúng tôi mong muốn đưa MoodCoffee trở thành thương hiệu cà phê hàng đầu, nổi tiếng với chất lượng, đa dạng và dịch vụ tận tâm.</p>
                </div>
                <div class="box-img-about col-4 bg-about position-relative">
                    <img src="/assets/images/about4.jpg" width="100%" height="auto">
                    <div class="line-about position-absolute top-50 start-0 translate-middle"></div>
                </div>
            </div>
        </div>
    </section>
@endsection