<style>
    :root {
        --main-black: #343A49;
        --main-green: #8BC34A;
    }
    .block-home-banner-wrapper {
        width: 100vw;
        margin-left: calc(50% - 50vw);
        padding-top: 130px;
        padding-bottom: 130px;
        background: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/Bg.png") no-repeat right / contain;
    }
    .block-home-banner {
        max-width: none!important;
        display: flex;
        gap: 40px;
        padding-left: 0px;
        padding-right: 0px;
        position: relative;
    }

    h1.banner-title {
        font-weight: 600;
        font-size: 56px;
        line-height: 72px;
        letter-spacing: -0.005em;
        color: var(--main-black);
        font-family: 'Brandon Grotesque';
    }
    .banner-description p{
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 32px;
        margin-top: 20px;
    }
    .banner-left-field {
        flex: 1;
    }
    .banner-right-field {
        display: flex;
        gap: 20px;
        position: relative;
        z-index: 1;
    }
    .banner-right-field img {
        width: 290px;
    }
    .optimized-image img{
        margin-top: 65px;
    }
    .banner-image-wrapper {
        position: relative;
    }
    h3.image-title {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 600;
        font-size: 28px;
        line-height: 36px;
        color: white;
        margin: 0px;
    }
    p.image-info-content {
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 26px;
        color: white;
        margin: 0px;
    }
    .banner-content-container {
        position: absolute;
        bottom: 35px;
        text-align: center;
        width: 100%;
    }
    a.get-started-link {
        background: #40B1D0;
        border-bottom: 6px solid #3694AE;
        border-radius: 3px;
        padding: 16px 32px;
        width: 190px;
        display: block;
        font-family: 'Source Sans Pro';
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 26px;
        color: white;
        text-decoration: blink;
        margin-top: 45px;
        position: relative;
    }
    a.get-started-link:after {
        content: "";
        mask: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/long-arrow-right.svg") no-repeat center / contain;
        -webkit-mask: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/long-arrow-right.svg") no-repeat center / contain;
        width: 18px;
        height: 12px;
        position: absolute;
        top: 23px;
        right: 17px;
        background: white;
    }
    .original-image, .optimized-image {
        position: relative;

    }
    .original-image:after  {
        content: "";
        mask: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/Arrow.svg") no-repeat center / contain;
        -webkit-mask: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/Arrow.svg") no-repeat center / contain;
        width: 56px;
        height: 32px;
        position: absolute;
        bottom: 15px;
        right: 0px;
        background: var(--main-green);
    }
    .optimized-image:after {
        content: "";
        background: url("<?php echo get_stylesheet_directory_uri(); ?>/blocks/assets/img/Meter.png") no-repeat center / contain;
        width: 140px;
        height: 96px;
        position: absolute;
        top: -17px;
        right: 13px;
        z-index: -1;
    }
</style>
<div class="block-home-banner-wrapper">
    <div class="block-home-banner container">
        <div class="banner-left-field">
            <div class="banner-left-container">
                <h1 class="banner-title"><?php block_field( 'banner-title' ); ?></h1>
                <div class="banner-description"><?php block_field( 'banner-description' ); ?></div>
                <a class="get-started-link" href="<?php block_field( 'button-link' ); ?>">GET STARTED</a>
            </div>
        </div>
        <div class="banner-right-field">
            <div class="original-image">
                <div class="banner-image-wrapper">
                    <img src="<?php block_field( 'left-image' ); ?>" />
                    <div class="banner-content-container">
                        <h3 class="image-title"><?php block_field( 'left-image-title' ); ?></h3>
                        <p class="image-info-content"><?php block_field( 'left-image-info' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="optimized-image">
                <div class="banner-image-wrapper">
                    <img src="<?php block_field( 'right-image' ); ?>" />
                    <div class="banner-content-container">
                        <h3 class="image-title"><?php block_field( 'right-image-title' ); ?></h3>
                        <p class="image-info-content"><?php block_field( 'right-image-info' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>