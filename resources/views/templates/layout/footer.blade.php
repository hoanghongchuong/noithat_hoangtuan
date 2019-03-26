<?php
    $setting = Cache::get('setting');    
?>

<footer>
    <div class="container">
        <div class="row top">
            <div class="col-md-5 info pdl-0">
                <div class="box-logo"><a href="" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" alt=""></a></div>
                <h3>Hợp tác xã tổng hợp chè thành công</h3>
                <p>Xưởng sản xuất: {{$setting->address}}</p>
                <p>Cửa hàng GTSP: Số nhà 177 -181 Đông Ngạc - Bắc Từ Liêm - Hà Nội</p>
                <p>SĐT: {{$setting->phone}} - {{$setting->hotline}} - {{$setting->copyright}}</p>
            </div>
            <div class="col-md-4">
                <p class="map">Bản đồ</p>
                <div class="box-map">
                    {!! $setting->iframemap !!}
                </div>
            </div>
            <div class="col-md-3 pdr-0">
                <p class="map">Fanpage</p>
                <div class="box-page box-map">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div> 
        </div>
        <div class="row">
            <p style="text-align: center; margin-bottom: 30px;">Designed by hungthinhads.com</p>
        </div>
    </div>
</footer>