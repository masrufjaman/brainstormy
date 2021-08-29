    <div class="btn-group">
        <button class="btn-group__item btn-group__item" id="add">Add New</button><button class="btn-group__item" id="edit">Edit</button><button class="btn-group__item">Filter</button><button class="btn-group__item">Delete</button><button class="btn-group__item">More</button>

        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
    </div>

    <?php
    include('./add_modal.php');
    include('./edit_modal.php');
    ?>

    <script>
        // for clock
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if (h == 0) {
                h = 12;
            }

            if (h > 12) {
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();

        // Modal Section
    </script>
    <script src="./js/modal.js"></script>