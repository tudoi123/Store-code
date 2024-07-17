@extends('layouts.app')

@section('body')
<style>
    /* Custom CSS for About Page */
    
    .about-background {
        background-color: #f8f9fa; /* Màu nền */
        color: #333; /* Màu văn bản */
        padding: 50px 0; /* Khoảng cách giữa phần nội dung và lề trên/dưới */
    }

    .about-section {
        text-align: center;
    }

    .about-section h2 {
        font-size: 36px; /* Kích thước tiêu đề */
        margin-bottom: 20px; /* Khoảng cách dưới tiêu đề */
    }

    .about-section p {
        font-size: 18px; /* Kích thước văn bản */
        margin-bottom: 30px; /* Khoảng cách dưới đoạn văn */
    }

    .about-team {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .team-member {
        margin: 0 20px; /* Khoảng cách giữa các thành viên */
        text-align: center;
    }

    .team-member img {
        border-radius: 50%; /* Đổi thành hình tròn */
        width: 200px; /* Kích thước hình ảnh */
        height: 200px;
        margin-bottom: 15px; /* Khoảng cách dưới hình ảnh */
    }

    .team-member h3 {
        font-size: 24px; /* Kích thước tên thành viên */
        margin-bottom: 10px; /* Khoảng cách dưới tên */
    }

    .team-member p {
        font-size: 16px; /* Kích thước chức vụ */
    }
</style>

<div class="container about-background">
    
    <div class="row">
        <div class="col-md-12 about-section">
            <h2>About Us</h2>
            <div class="row about-team">
        <div class="col-md-4 team-member">
            <img src="images/bangsize.jpg" alt="Team Member 1">
            <h3>Size Table</h3>
            <p>CEO</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="images/bangmau.jpg" alt="Team Member 2">
            <h3>Shirt color</h3>
            <p>CTO</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="images/logogodmorther.jpg" alt="Team Member 3">
            <h3>Logo</h3>
            <p>Lead Developer</p>
        </div>
    </div>
            <p>Welcome to [Shop Name]!</p>

            <p> We are a store specializing in providing a wide range of fashionable clothes, offering the perfect choice for fashion enthusiasts. At [Shop Name], we not only provide quality products but also deliver an excellent shopping experience for all customers.

            We pride ourselves on the diversity of our clothing collection, from simple and elegant designs to stylish and trendy ones. Our customers can easily find products that match their style and preferences.

            With a commitment to maximizing customer satisfaction, we always prioritize product quality, dedicated customer service, and reasonable prices.

            Come and explore the fashion world at [Shop Name] today!</p>
        </div>
    </div>
    
</div>
@endsection
