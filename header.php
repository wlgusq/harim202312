<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Date" content="2023-12-04T11:05:30+09:00">
  <meta http-equiv="Subject" content="모든 디바이스에 최적화된 반응형웹">
  <meta http-equiv="Title" content="하림펫푸드 반응형웹">
  <meta http-equiv="Other" content="작성자 이름 적기">
  <meta http-equiv="Distribution" content="배포자 이름 적기">
  <meta http-equiv="Copyright" content="하림">
  <meta http-equiv="Build" content="223-12-04T11">
  <title>하림펫푸드 반응형웹-메인페이지</title>

  <!-- 아이폰에서 숫자가 전화번호로 인식해서 어둡게 나오는 것을 방지 -->
  <meta name="format-detection" content=" telephone=no">

  <!-- 파비콘 이미지 삽입하기 -->
  <link rel="shortcut icon" type="image/x-icon" href="./images/favicon.psd">

  <!-- 1. 초기화 -->
  <link href="./css/reset.css" rel="stylesheet" type="text/css">

  <!-- 2. 기본서식 base -->
  <link href="./css/base.css" rel="stylesheet" type="text/css">

  <!-- 3. 공통서식 header, footer 공통서식 -->
  <link href="./css/common.css" rel="stylesheet" type="text/css">

  <!-- 4. mobile해상도에 맞는 서식 -->
  <link href="./css/mobile.css" rel="stylesheet" type="text/css">

  <!-- 5. tablet해상도에 맞는 서식 -->
  <link href="./css/tablet.css" rel="stylesheet" type="text/css">

  <!-- 6. 서브해상도에 맞는 서식(pc) -->
  <link href="./css/sub.css" rel="stylesheet" type="text/css">

  <!-- 아이콘폰트 주소 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" type="text/css">



</head>
<body>
  <form name="search" method="post" action="search.php">
  <input type="checkbox" id="toggle">

  <!-- 헤더영역 시작 -->
  <header>
  <div class="h_top">
    <!-- 상단로고 -->
    <h1>
      <a href="index.html" title="메인페이지로 바로가기">
        <img src="./images/logo2.png" alt="상단로고">
      </a>
    </h1>

    <!-- 로그인, 회원가입 -->
    <nav class="lnb">
      <ul>
        <li><a href="login.html" title="로그인">로그인</a></li>
        <li><a href="join.html" title="회원가입">회원가입</a></li>
        <li><a href="order.html" title="주문조회">주문조회</a></li>
        <li><a href="cart.html" title="장바구니">장바구니</a></li>
      </ul>
    </nav>

    <!-- 검색폼 -->
    <fieldset>
      <input type="search" id="search" placeholder="이달의 특가 5%" maxlength="50">
      <label for="search" class="fas fa-search"><span>검색버튼</span></label>
    </fieldset>
  </div>

    <label for="toggle" class="total_btn">
      <i class="fas fa-bars"></i>
    </label>
    <a href="cart.html" title="장바구니 페이지 바로가기" class="cart_btn">
      <i class="fas fa-shopping-cart"></i>
    </a>

    <!-- 메인 내비게이션 2단 메뉴 -->
    <div class="h_bottom">
      <nav class="gnb">
        <label for="toggle" class="c_btn"><i class="fas fa-times"></i></label>
        <ul>
          <li><a href="brand.html" title="브랜드">브랜드<i class="fa-solid fa-chevron-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="가장 맛있는 시간 30일">가장맛있는시간30일</a></li>
              <li><a href="#" title="더리얼">더리얼</a></li>
              <li><a href="#" title="밥이보약">밥이보약</a></li>
            </ul>
          </li>
          <li><a href="delivery.html" title="정기배송">정기배송<i class="fa-solid fa-chevron-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="정기배송">정기배송</a></li>
              <li><a href="#" title="빠른배송">빠른배송</a></li>
            </ul>
          </li>
          <li><a href="dog.html" title="DOG">DOG<i class="fa-solid fa-chevron-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="오늘생산 . 배송">오늘생산 &#x00B7; 배송</a></li>
              <li><a href="#" title="브랜드별">브랜드별</a></li>
              <li><a href="#" title="연령별">연령별</a></li>
              <li><a href="#" title="유형별">유형별</a></li>
              <li><a href="#" title="샘플신청">샘플신청</a></li>
              <li><a href="#" title="상품후기">상품후기</a></li>
            </ul>
          </li>
          <li><a href="cat.html" title="CAT">CAT<i class="fa-solid fa-chevron-down"></i><a>
            <ul class="sub">
              <li><a href="#" title="오늘생산 . 배송">오늘생산 &#x00B7; 배송</a></li>
              <li><a href="#" title="브랜드별">브랜드별</a></li>
              <li><a href="#" title="연령별">연령별</a></li>
              <li><a href="#" title="유형별">유형별</a></li>
              <li><a href="#" title="샘플신청">샘플신청</a></li>
              <li><a href="#" title="상품후기">상품후기</a></li>
            </ul>
          </li>
          <li><a href="member.html" title="멤버십">멤버십<i class="fa-solid fa-chevron-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="멤버십">멤버십</a></li>
              <li><a href="#" title="이벤트">이벤트</a></li>
              <li><a href="#" title="골드멤버존">골드멤버존</a></li>
            </ul>
          </li>
          <li><a href="story.html" title="우리 이야기">우리 이야기<i class="fa-solid fa-chevron-down"></i></a>
            <ul class="sub">
              <li><a href="#" title="우리이야기">우리이야기</a></li>
              <li><a href="#" title="우리의약속">우리의약속</a></li>
              <li><a href="#" title="100%휴먼그레이드">100%휴먼그레이드</a></li>
              <li><a href="#" title="이노베이션">이노베이션</a></li>
              <li><a href="#" title="제조시설">제조시설</a></li>
              <li><a href="#" title="반려견 동반">반려견 동반</a></li>
              <li><a href="#" title="투어신청">투어신청</a></li>
            </ul>
          </li>
          <li><a href="tour.html" title="투어신청">투어신청<i class="fa-solid fa-chevron-down"></i></a></li>
        </ul>
      </nav>
    </div>

  </header>