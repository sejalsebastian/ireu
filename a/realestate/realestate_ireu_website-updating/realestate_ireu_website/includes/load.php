<style>
    body {
        background: white;

    }

    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 9999;
        overflow: hidden;
        background: #fff;

    }


    .spinner {
        border-radius: 50%;
        box-sizing: border-box;
        border: 5px solid white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }


    .outer {
        border-right: 6px solid #113394;
        border-left: 6px solid #113394;
        border-top: 2px solid #bba268;
        border-bottom: 2px solid #bba268;
        width: 120px;
        height: 120px;
        margin: -60px;

        -webkit-animation: outer-spin 3s linear infinite;
        animation: outer-spin 3s linear infinite;
    }

    .eye {
        width: 80px;
        height: 80px;
        border: none;

        animation: eye-flash 3s infinite;
        background-image: url('./img/favicon.png');
        background-size: 80px 80px;
    }





    @-webkit-keyframes outer-spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate-(180deg);
        }
    }

    @keyframes outer-spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(-360deg);
        }
    }
</style>
<!-- pre loader  -->

<!-- Loading Spinner -->
<div id="preloader">
    <div class="spinner outer"></div>

    <div class="spinner eye">
    </div>


</div>




<script type="text/javascript">
    document.onreadystatechange = function() {


        var state = document.readyState
        if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('preloader').style.visibility = "hidden";
            }, 1000);
        }
    }
</script>