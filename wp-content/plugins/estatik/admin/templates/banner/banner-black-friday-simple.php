<script>
    document.addEventListener("DOMContentLoaded", function() {
        setInterval( function() {
            var minutes = document.querySelector( '.js-es-timer__minutes' ).innerHTML;

            if ( minutes > 0 ) {
                minutes = --minutes;
                document.querySelector( '.js-es-timer__minutes' ).innerHTML = minutes;
            } else {
                document.querySelector( '.es-notice__coupon' ).style.display = 'none';
            }
        }, 1000 * 60 );
    });
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@500&display=swap" rel="stylesheet">
<style>
    .es-notice__coupon {
        box-shadow: none;
        border: 0;
        padding: 0;
        background: #23282D;
        font-family: 'Open Sans', sans-serif;
        display: flex;
        align-items: center;
    }

    .es-timer {
        background: #BA2D00;
        border-radius: 0 0 68px 0;
        height: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        vertical-align: middle;
        padding: 19px 35px 19px 21px;
    }

    .es-timer .es-timer__item {
        text-align: center;
        margin-top: 6px;
        padding: 0 11px;
        position: relative;
    }

    .es-timer .es-timer__item b {
        display: block;
        font-weight: 600;
        font-size: 18px;
    }

    .es-timer .es-timer__item span {
        font-weight: normal;
        font-size: 11px;
        position: relative;
        top: -1px;
    }

    .es-timer .es-timer__item:not(:last-child):after {
        content: '';
        width: 1px;
        height: 20px;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.6);
        display: inline-block;
        vertical-align: middle;
    }

    .es-notice .es-notice__content {
        display: inline-block;
        vertical-align: middle;
        margin: 3px 0 0 17px;
    }

    .es-notice .es-notice__content p {
        margin: 0;
        padding: 0;
    }

    .es-notice .es-notice__content a {
        color: #00B0FF
    }

    @media screen and (max-width: 880px) {
        .es-timer .es-timer__item b {
            font-size: 16px;
        }

        p.es-become-pro {
            font-size: 11px;
        }

        .es-timer {
            padding: 10px 23px 10px 9px;
        }
    }

    @media screen and (max-width: 620px) {
        .es-notice__coupon {
            flex-wrap: wrap;
        }

        .es-timer {
            flex: 1 0 100%;
            border-radius: 0;
            box-sizing: border-box;
        }

        .es-notice__coupon {
            padding: 0 !important;
        }

        .es-notice__content {
            padding: 10px 0px;
        }
    }
</style>
<div data-notice="es-coupon-notice" class="es-notice es-notice__coupon notice is-dismissible">
	<div class="es-timer">
		<div class="es-timer__item">
			<b><?php echo $days; ?></b>
			<span><?php echo _n( 'day', 'days', $days, 'es-plugin' ); ?></span>
		</div>
		<div class="es-timer__item">
			<b><?php echo $hours; ?></b>
			<span><?php echo _n( 'hour', 'hours', $hours, 'es-plugin' ); ?></span>
		</div>
		<div class="es-timer__item">
			<b class="js-es-timer__minutes"><?php echo $minutes; ?></b>
			<span><?php echo _n( 'min', 'mins', $minutes, 'es-plugin' ); ?></span>
		</div>
	</div>
	<div class="es-notice__content">
        <p style="font-weight: 800; font-size: 18px; line-height: 150%; text-transform: uppercase; font-family: 'Oxanium', cursive;">
            <span style="color: #BA2D00;">BLACK FRIDAY & </span>
            <span style="color: #fff;">Cyber Monday </span>
            <span style="color: #BA2D00;">Sale!</span>
        </p>
        <p style="font-weight: normal; font-size: 12px; line-height: 150%; color: #FFFFFF;">Grab this incredible discount! <a href="https://estatik.net/choose-your-version/" target="_blank">Upgrade with 35% OFF now!</a></p>
	</div>
</div>