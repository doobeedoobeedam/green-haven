<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green Haven</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>
    <header class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="nav-links">
                <a href="#">About Green Haven</a>
                <a href="#">Event Details</a>
                <a href="#">Our Sponsors</a>
                <a href="#">Leaderboard</a>
            </nav>
            <a href="#" class="btn btn-border">Plant a Mangrove</a>
            <div class="menu-toggle">
                <span>&#9776;</span>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="hero">
            <div class="hero-header">
                <button class="btn btn-border">Green Haven Project - Mangrove</button>
                <h2>Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h2>
                <div class="card">
                    <div class="card-wrapper">
                        <div class="card-header">
                            <div class="left">
                                <img src="img/mangrove.png" alt="Mangrove">
                                <h4>5,690 <span>/ 10,000 Pohon</span></h4>
                            </div>
                            <div class="btn btn-fill">Support Our Mission<span class="btn-icon">✓</span></div>
                        </div>
                        <div class="card-body">
                            <div class="progress-container">
                                <div class="progress-bar" style="width: 75%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/hero.png" alt="">
        </div>
        <div class="leaderboard">
            <div class="leaderboard-header">
                <h3>Leaderboard</h3>
                <div class="leaderboard-button">
                    <button href="#" class="btn btn-border">Most Donation</button>
                    <button href="#" class="btn btn-border">Most Recent</button>
                </div>
            </div>
            <div class="list-container">
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">01</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/mangrove-maven.png" alt="Mangrove Maven" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Mangrove Maven</p>
                                <h3 class="item-name">Budi Hartanto</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>350 <span>Pohon</span></h4>
                    </div>
                </div>
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">02</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/mangrove-maven.png" alt="Mangrove Maven" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Mangrove Maven</p>
                                <h3 class="item-name">Dewi Sartika</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>330 <span>Pohon</span></h4>
                    </div>
                </div>
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">03</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/mangrove-maven.png" alt="Mangrove Maven" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Mangrove Maven</p>
                                <h3 class="item-name">Eko Wahyudi</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>200 <span>Pohon</span></h4>
                    </div>
                </div>
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">04</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/guardian-grove.png" alt="Guardian of the Grove" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Guardian of the Grove</p>
                                <h3 class="item-name">Rina Kartika</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>190 <span>Pohon</span></h4>
                    </div>
                </div>
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">05</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/guardian-grove.png" alt="Guardian of the Grove" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Guardian of the Grove</p>
                                <h3 class="item-name">Agus Prasetyo</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>140 <span>Pohon</span></h4>
                    </div>
                </div>
                <div class="list-item">
                    <div class="list-info">
                        <div class="number">06</div>
                        <div class="list-detail">
                            <div class="item-image">
                                <img src="img/mangrove-master.png" alt="Mangrove Master" class="item-image">
                            </div>
                            <div class="item-details">
                                <p class="item-score">Mangrove Master</p>
                                <h3 class="item-name">Irfan Setiawan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="list-total">
                        <img src="img/mangrove.png" alt="Mangrove">
                        <h4>80 <span>Pohon</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="partner">
        <div class="partner-container">
            <div class="partner-item">
                <img src="img/jala.png" alt="Jala">
            </div>
            <div class="partner-item">
                <img src="img/efishery.png" alt="efishery">
            </div>
            <div class="partner-item">
                <img src="img/azarine.png" alt="Azarine">
            </div>
            <div class="partner-item">
                <img src="img/kompas.png" alt="Kompas">
            </div>
            <div class="partner-item">
                <img src="img/tribun.png" alt="Tribun">
            </div>
            <div class="partner-item">
                <img src="img/jawapos.png" alt="Jawapos">
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about-container">
            <div class="about-header">
                <div class="about-img">
                    <img src="img/jci.png" alt="JCI">
                    <img src="img/green-haven-p.png" alt="Green Haven">
                </div>
                <div class="about-text">
                    <h2>About Green Haven Project</h2>
                    <p>The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise awareness by
                        planting mangroves and educating participants about the importance of these areas. This six-hour
                        event will involve JCI members, local farmers, and students, focusing on combating beach erosion
                        and promoting ESG values.</p>
                </div>
            </div>
            <div class="about-image">
                <div class="card">
                    <img src="img/curved-arrow.png" alt="">
                    <h2>TRANSFORMATION</h2>
                </div>
                <div class="image-container">
                    <div class="image-column">
                        <img src="img/before.jpeg" alt="Before mangroves were planted">
                        <p>Before mangroves were planted</p>
                    </div>
                    <div class="image-column">
                        <img src="img/after.png" alt="After mangroves were planted">
                        <p>After mangroves were planted</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="event">
        <div class="event-container">
            <div class="event-header">
                <h2>Event Summary</h2>
                <p>We give you a brief overview of the event to give you a glimpse of what we're doing
                    in the Green Haven Project, download the detailed PDF to see how you can get involved</p>
            </div>
            <div class="event-detail">
                <div class="card">
                    <div class="event-desc">
                        <h4>26/04/2024</h4>
                        <h3>08:00 - 11:00 WIB</h3>
                        <p>Join the impactful journey of planting mangroves,
                            where you'll learn, collaborate with locals, earn recognition,
                            and share your story through media coverage</p>
                        <button class="btn btn-fill"><span class="btn-icon">&#x261E;</span> View Event
                            Details</button>
                    </div>
                    <div class="event-image">
                        <div class="slider">
                            <div class="slides">
                                <div class="slide">
                                    <img src="img/event.png" alt="Image 1">
                                </div>
                                <div class="slide">
                                    <img src="img/event.png" alt="Image 2">
                                </div>
                                <div class="slide">
                                    <img src="img/event.png" alt="Image 3">
                                </div>
                            </div>
                            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                            <button class="next" onclick="moveSlide(1)">&#10095;</button>
                        </div>
                    </div>
                </div>
                <div class="lists">
                    <div class="list">
                        <div class="list-text">
                            <h4>01</h4>
                            <p>Introducing the beauty
                                of mangroves on a journey to the planting site.</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-text">
                            <h4>02</h4>
                            <p>Working together with
                                local farmers while
                                planting each mangrove.</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-text">
                            <h4>03</h4>
                            <p>Exploring the wonders of mangrove ecotourism, an educational adventure.</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-text">
                            <h4>04</h4>
                            <p>Receive a plaque & badge,
                                a mark of honor for every tree you plant.</p>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-text">
                            <h4>05</h4>
                            <p>Coverage & documentation by news media, share your story of change!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sponsorship">
        <div class="sponsorship-container">
            <div class="sponsorship-header">
                <h2>Sponsorship Packages</h2>
                <p>Our sponsorship package offers branding, promotional opportunities, and visibility at our event,
                    ideal for enhancing company presence and community engagement.</p>
            </div>
            <div class="sponsorship-package personal">
                <h3>Personal Sponsorship Package</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Membership Tier</th>
                                <th>Min. Seeds</th>
                                <th>Min. Buy</th>
                                <th>Benefits</th>
                                <th>Donors</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="image-text">
                                        <img src="img/seedling-scout.png" alt="Seedling Scout">
                                        <span>Seedling Scout</span>
                                    </div>
                                </td>
                                <td>5 Seeds</td>
                                <td>IDR 75K</td>
                                <td>Badge</td>
                                <td>4,900 Donors</td>
                                <td><button class="btn btn-fill">Support Our Mission<span
                                            class="btn-icon">&#10095;</span></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="image-text">
                                        <img src="img/sapling-saviour.png" alt="Sapling Savior">
                                        <span>Sapling Savior</span>
                                    </div>
                                </td>
                                <td>10 Seeds</td>
                                <td>IDR 150K</td>
                                <td>Badge + Pin</td>
                                <td>4,300 Donors</td>
                                <td><button class="btn btn-fill">Support Our Mission<span
                                            class="btn-icon">&#10095;</span></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="image-text">
                                        <img src="img/mangrove-master.png" alt="Mangrove Master">
                                        <span>Mangrove Master</span>
                                    </div>
                                </td>
                                <td>50 Seeds</td>
                                <td>IDR 750K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>5,000 Donors</td>
                                <td><button class="btn btn-fill">Support Our Mission<span
                                            class="btn-icon">&#10095;</span></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="image-text">
                                        <img src="img/guardian-grove.png" alt="Guardian of the Grove">
                                        <span>Guardian of the Grove</span>
                                    </div>
                                </td>
                                <td>100 Seeds</td>
                                <td>IDR 1500K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>300 Donors</td>
                                <td><button class="btn btn-fill">Support Our Mission<span
                                            class="btn-icon">&#10095;</span></button></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="image-text">
                                        <img src="img/mangrove-maven.png" alt="Mangrove Maven">
                                        <span>Mangrove Maven</span>
                                    </div>
                                </td>
                                <td>200 Seeds</td>
                                <td>IDR 3000K</td>
                                <td>Badge + Pin + Bag</td>
                                <td>10 Donors</td>
                                <td><button class="btn btn-fill">Support Our Mission<span
                                            class="btn-icon">&#10095;</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sponsorship-package corporate">
                <h3>Corporate Sponsorship Package</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Benefits</th>
                                <th>Eco Trailblazers</th>
                                <th>Green Innovators</th>
                                <th>Eco Vanguard</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Price</td>
                                <td>15 Million IDR</td>
                                <td>30 Million IDR</td>
                                <td>45 Million IDR</td>
                            </tr>
                            <tr>
                                <td>CO<sub>2</sub> Sequestration</td>
                                <td>22,5 ton/year</td>
                                <td>45 ton/year</td>
                                <td>67,5 ton/year</td>
                            </tr>
                            <tr>
                                <td>Number of Tress</td>
                                <td>1000 Trees</td>
                                <td>2000 Trees</td>
                                <td>3000 Trees</td>
                            </tr>
                            <tr>
                                <td>Logo on JCI Banner</td>
                                <td>✓</td>
                                <td>✓</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Logo on Communal Stainless Plate</td>
                                <td>✓</td>
                                <td>✓</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Considered as Main Sponsor</td>
                                <td>✓</td>
                                <td>✓</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Dedicated Stainless Plate</td>
                                <td></td>
                                <td>✓</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Report Update on Planted Trees</td>
                                <td></td>
                                <td>✓</td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Logo on Event Clothings</td>
                                <td></td>
                                <td></td>
                                <td>✓</td>
                            </tr>
                            <tr>
                                <td>Report Update on Planted Trees</td>
                                <td>
                                    <div class="button-container"><button class="btn btn-fill">Support Our
                                            Mission<span class="btn-icon">&#10095;</span></button></div>
                                </td>
                                <td>
                                    <div class="button-container"><button class="btn btn-fill">Support Our
                                            Mission<span class="btn-icon">&#10095;</span></button></div>
                                </td>
                                <td>
                                    <div class="button-container"><button class="btn btn-fill">Support Our
                                            Mission<span class="btn-icon">&#10095;</span></button></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="cta">
        <div class="cta-header">
            <h2>Donate Today and be a
                Guardian of the Green Belt.</h2>
            <p>Join us in our mission to rejuvenate and protect our shorelines
                by donating to our mangrove planting project.</p>
            <a class="btn btn-fill">Support Our Mission<span class="btn-icon">✓</span></a>
        </div>
        <div class="cta-image">
            <div class="image-item item-1">
                <img src="img/img-1.png" alt="Image 1">
            </div>
            <div class="image-item item-2">
                <img src="img/img-2.png" alt="img- 2">
            </div>
            <div class="image-item item-3">
                <img src="img/img-3.png" alt="img- 3">
            </div>
            <div class="image-item item-4">
                <img src="img/img-4.png" alt="img- 4">
            </div>
            <div class="image-item item-5">
                <img src="img/img-5.png" alt="img- 5">
            </div>
        </div>
    </div>
    <footer>Test dikerjakan oleh: <a href="https://github.com/doobeedoobeedam/green-haven" target="_blank">Kusuma Wecitra</a></footer>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>