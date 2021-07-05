        <!-- container -->
        </div>
        <br>
        <footer style="background: rgba(0,0,0,0.9); height: 130px;" class="footer mt-auto py-3 text-light">
            <div style="margin-top: 2.5em;" class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; 2020 HappyAuc &middot; Privacy &middot; Terms</p>
            </div>
        </footer>



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {

                $("#button-bid").click(function() {
                    var urlBid = $("#button-bid").data('urlitem');
                    console.log($("#bid-price").val())
                    $.ajax({
                        type: "POST",
                        url: urlBid,
                        data: {
                            "bid-price": $("#bid-price").val()
                        },
                        // dataType: "json",
                        success: function() {
                            alert("success"); //as a debugging message.
                            window.location.reload();
                        }
                    }); // you have missed this bracket
                    return false;
                });
            });
        </script>
        </body>

        </html>