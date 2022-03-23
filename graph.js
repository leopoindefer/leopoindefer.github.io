<script type="text/javascript">
            function changeText() {

                var b0 = document.getElementById('b0');
                var b1 = document.getElementById('b1');

                if(b0.onclick="changeText();") {
                    document.getElementById('pText').innerHTML = "HTML 5/CSS 3";
                    document.getElementById('pText2').innerHTML = "C++";
                    document.getElementById('pText3').innerHTML = "PHP MySQL";
                    document.getElementById('pText4').innerHTML = "JS";
                    document.getElementById('pText5').innerHTML = "R";
                }
                if(b1.onclick="changeText();") {
                    document.getElementById('pText').innerHTML = "Excel";
                    document.getElementById('pText2').innerHTML = "Gretl";
                    document.getElementById('pText3').innerHTML = "Wordpress";
                    document.getElementById('pText4').innerHTML = "Powerpoint";
                    document.getElementById('pText5').innerHTML = "Word";
                }
            }

    </script>