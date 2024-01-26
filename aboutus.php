<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
   
</head>
<style>
    body {
        font-family: 'Roboto', serif;
    }

    .about-us-page {
        margin-top: 5rem;
    }

    .about-section {
        width: 80%;
        margin: 0 auto;
        display: flex;
    }

    .image {
        flex: 1;
    }

    .image img {
        max-width: 100%;
        height: 500px;
    }

    .content {
        flex: 1;
        padding: 20px;
        line-height: 1.4rem;
    }

    h2 {
        font-size: 40px;
    }

    p {
        font-size: 16px;
    }

    strong {
        font-weight: bold;
    }

    .image-link {
        color: black;
    }

    .red-button {
    margin-top: 3rem;
    background-color: rgba(228, 42, 42, 0.7);
    color: white;
    padding: 20px 60px;
    border: none;
    border-radius: 18px;
    cursor: pointer;
    text-transform: uppercase;
    font-size: 1.2rem;
    transition: background-color 0.5s; 
}

.red-button:hover {
    background-color: #ff0000; 
}

    .stats-section {
        margin-top: 2rem;
        display: flex;
        justify-content: space-around;
    }

    .stat {
        text-align: center;
    }

    .number {
        font-size: 46px;
        font-weight: bold;
        color: #f44336;
    }

    .stat-title {
        margin: auto 1rem;
        margin-bottom: 1.4rem;
        font-weight: bold;
        font-size: 1.3rem;
        display: inline-block;
        vertical-align: middle;
    }

    .stat-description {
        width: 50%;
        margin: 1.2rem auto;
        color: #808080FF;
    }
</style>
<body>
    <div class="about-us-page">
        <div class="about-section">
            <div class="image">
                  <img src="companyworking.jpg" alt="Image 1">
            </div>

            <div class="content">
               <h2>About Us</h2>
               <p>Stablished in 2017, Gerbys Socks was born out of a
                shared passion for redefining the sock experience. From a humble beginning, we've evolved into a
                 destination where comfort and style intersect. Our curated collection reflects years of dedication to transforming an everyday 
                 accessory into a statement of individuality.</p>
               <p><strong>Join us on this journey that started in 2017, where every step is an expression of our 
                commitment to exceptional socks.
                </strong></p>
               <p>Image from: <a class="image-link" href="https://www.freepik.com"></a>Freepik</p>
               <button class="red-button"><link rel="stylesheet" href="">Contacts Us</button>
            </div>
         </div>
            <div class="stats-section">
                 <div class="stat">
                    <span class="number">01</span>
                    <span class="stat-title">How it started</span>
                    <p class="stat-description">In a eureka moment,Gerbys Socks envisioned a sock revolution—one where comfort met creativity. With a needle, thread, and a dream, Gerbys Socks was born. From those humble beginnings, we've stitched together a story of socks that redefine style and step into every journey with you.</p>
                 </div>
            
            <div class="stat">
                <span class="number">02</span>
                <span class="stat-title">About our products</span>
                <p class="stat-description">
                    At Gerbys Company, we prioritize not only your comfort but also the planet's well-being. Embrace sustainable fashion with our eco-friendly materials and ethical production practices. Every pair you choose is a step towards a more conscious and stylish tomorrow.
                </p>
                </div>

             <div class="stat">
                <span class="number">03</span>
                <span class="stat-title">Materials we use</span>
                <p class="stat-description">Our socks are crafted from premium, skin-friendly yarns that redefine softness. We source ethically and consciously, ensuring that each fiber meets the highest standards of quality. From cozy cotton to luxurious blends, our materials are chosen with your comfort in mind.</p>
             </div>
        
         </div>
</body>
</html>