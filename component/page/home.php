<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    .container-home {
        padding: 20px;
    }

    .card {
        width: 1201px;
        position: relative;
        padding: 20px;
        height: 219px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        background: linear-gradient(133deg, #2B65FC 3.86%, #5BF 99.28%);
        border-radius: 20px;
        fill: linear-gradient(92deg, #6DB9EF 5.24%, #2B65FC 92.59%);
        filter: drop-shadow(0px 2px 4px rgba(0, 0, 0, 0.25));
    }

    .text-content {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .text-content h1 {
        font-size: 36px;
        font-weight: bold;
        color: #2B65FC;
    }

    .text-content p {
        font-size: 24px;
        font-weight: 600;
        color: #707070;
    }

    .card h1 {
        font-size: 36px;
        font-weight: 700;
        color: white;
    }

    .card p {
        font-size: 24px;
        color: white;
        font-weight: 400;
    }

    .card img {
        position: absolute;
        right: 10px;
        top: -20px;
        width: 330px;
        height: 240px;
    }

    .container-bottom {
        margin-top: 20px;
        display: flex;

    }

    .month-c {
        width: 350px;
        height: 496px;
        border-radius: 20px;
        background-color: white;
        flex-grow: 2;
        padding: 30px 10px;
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: center;
    }

    .month-c h1 {
        font-size: 40px;
        font-weight: bold;
        color: #707070;
        margin-bottom: 10px;
    }

    .month-c h2 {
        font-size: 80px;
        font-weight: bold;
        color: #2B65FC;
        margin-bottom: 10px;
    }

    .month-c p {
        font-size: 31px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #707070;
    }

    .month-c img {
        width: 300px;
        height: 300px;
    }

    .content-side {
        flex-grow: 7;
        display: flex;
        align-items: center;
        flex-direction: column;

    }

    .content-left {
        flex-grow: 5;
    }

    .content-sTop {
        width: 812px;
        background-color: white;
        border-radius: 18px;
        height: 251px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .content-sBot {
        width: 812px;
        background-color: white;
        border-radius: 18px;
        height: 251px;
        padding: 10px;
    }

    .content-sBot h1 {
        font-size: 20px;
        font-weight: bold;
        color: #2B65FC;
    }

    .content-sTop h1 {
        font-size: 20px;
        font-weight: bold;
        color: #2B65FC;
    }

    .content-sTop table {
        width: 812px;
        height: auto;

    }
</style>

<body>
    <div class="container-home">
        <div class="text-content">
            <h1>Home</h1>
            <p>November 2023</p>
        </div>
        <div class="card">
            <div class="text-c">
                <h1>Good Morning, Arda</h1>
                <p>Hey, there are a lot of transactions you,jneed to complete</p>
            </div>
            <img src="./assets/clip-card.png" alt="">
        </div>
        <div class="container-bottom">
            <div class="content-left">
                <div class="month-c">
                    <h1>
                        Your Earning<br />This Month
                    </h1>
                    <h2>200JT</h2>
                    <p>Check In HERE!!!</p>
                    <img src="./assets/clip-2.svg" />
                </div>
            </div>

            <div class="content-side">
                <div class="content-sTop">
                    <h1>Customer LIst</h1>
                    <table>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Date of Birth</td>
                            <td>Address</td>
                            <td>Contact</td>
                            <td>Gender</td>
                        </tr>
                        <tr>

                            <td>coba</td>
                            <td>Date of Birth</td>
                            <td>Address</td>
                            <td>Contact</td>
                            <td>Gender</td>
                            <td>Gender</td>
                        </tr>
                    </table>
                </div>

                <div class="content-sBot">
                    <h1>Achiefment 6 Last Month</h1>
                    <img src="./assets/tangga.png" width="470.5px" height="213.5px" />
                </div>
            </div>
        </div>

    </div>

</body>

</html>