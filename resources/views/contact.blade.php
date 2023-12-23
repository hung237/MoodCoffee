@extends('index')
@section('title', 'Page contact')
@section('main')
    <section style="margin-top: 120px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 pe-1">
                    <h2 style="font-weight: bold ;font-size: 42px; line-height: 1.6">Luôn Luôn Lắng Nghe.<br>Hãy <span class="text-main">Liên Hệ</span> Với Chúng Tối Nhé!</h2>
                    <p class="fs-6 my-4">Tự tin bước vào thế giới của chúng tôi và đặt câu hỏi, chia sẻ ý kiến hoặc đ ơn giản chỉ để chúng tôi biết bạn đang ở đây. Hãy liên hệ với chúng tôi ngay bây giờ để chúng ta có thể hỗ trợ bạn tốt nhất. <br>Chúng tôi luôn sẵn lòng lắng nghe và giải đáp mọi thắc mắc của bạn.</p>
                    <span class="text-sub fw-bold">Hotline: +(84)838 205 305</span>
                </div>
                <div class="col-6 ps-2 d-flex justify-content-center">
                    <img class="mx-auto" src="/assets/images/contact.png" width="60%">
                </div>
            </div>
            <div class="row">
                <div class="row p-5 bg-sub2 bor my-5 rounded">
                    <h2 class="w-100 text-center pb-5">Liên Hệ Với Chúng Tôi</h2>
                    <div class="col-6 px-3">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Họ Tên</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="full name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="yourEmail@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Điện Thoại</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="0989 999 999">
                        </div>
                    </div>
                    <div class="col-6 px-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội Dung</label>
                        <textarea style="height: 80%" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="w-100 text-center mt-3">
                        <button class="btn px-3 f-5 fw-bold text-white btn-main m-auto">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection