<?php include 'navbar.php'; ?>

<style>
    .content {
        text-align: center;
        padding: 20px;
    }
    .example-image {
        max-width: 100%;
        height: auto;
        margin: 20px 0;
    }
    .reviews {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin-top: 30px;
    }
    .review {
        width: 30%;
        min-width: 250px;
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .stars {
        color: gold;
    }
</style>

<div class="content">
    <h1>Welcome to Progress Tracker</h1>
    <p>Track your progress, share your journey, and get inspired by others!</p>

    <img src="assets/exampleprogress.png" alt="Example Progress" class="example-image">

    <h2>What Our Users Say</h2>
    <div class="reviews">
        <div class="review">
            <p class="stars">★★★★★</p>
            <p>"This app has been a game-changer for my fitness journey. Seeing my progress visually keeps me motivated!"</p>
            <p><em>- Sarah J.</em></p>
        </div>
        <div class="review">
            <p class="stars">★★★★★</p>
            <p>"I love how easy it is to track my progress. The community support is amazing too!"</p>
            <p><em>- Mike T.</em></p>
        </div>
        <div class="review">
            <p class="stars">★★★★★</p>
            <p>"Progress Tracker helped me stay accountable and reach my goals. Highly recommended!"</p>
            <p><em>- Emily R.</em></p>
        </div>
    </div>
</div>