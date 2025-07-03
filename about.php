<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about AppexInsurance's 15+ years of experience providing reliable auto insurance coverage. Discover our mission, values, and commitment to protecting drivers nationwide.">
    <meta name="keywords" content="about AppexInsurance, auto insurance company, insurance history, company mission, insurance values">
    <meta name="author" content="AppexInsurance">
    <meta property="og:title" content="About AppexInsurance - Your Trusted Auto Insurance Partner">
    <meta property="og:description" content="Learn about our 15+ years of experience, mission, and commitment to protecting drivers nationwide.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://appexinsurance.us/about.html">
    <meta name="robots" content="index, follow">
    <title>About AppexInsurance - Your Trusted Auto Insurance Partner Since 2008</title>

    <!-- Preload and load main stylesheet -->
    <link rel="preload" href="styles.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles.css"></noscript>
    <link rel="icon" href="icon.webp">
    <style>
        .page-hero {
    background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
    padding: 3rem 0;
    text-align: center;
}

.page-hero h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #1a365d;
}

.hero-subtitle {
    font-size: 1.2rem;
    color: #4a5568;
    margin-bottom: 0.5rem;
}

.last-updated {
    font-size: 0.9rem;
    color: #718096;
    font-style: italic;
}
        /* About Page Styles */
.about-story {
    padding: 5rem 0;
    background: white;
}

.story-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    align-items: center;
}

.story-text p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.story-image {
    display: flex;
    justify-content: center;
}

.image-placeholder {
    width: 300px;
    height: 200px;
    background: #edf2f7;
    border: 2px dashed #cbd5e0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    color: #4a5568;
    font-style: italic;
}

.mission-values {
    padding: 5rem 0;
    background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
}

.mission-values h2 {
    text-align: center;
    margin-bottom: 3rem;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
}

.value-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.value-card:hover,
.value-card:focus-within {
    transform: translateY(-5px);
}

.value-card h3 {
    color: #1a365d;
    margin-bottom: 1rem;
}

.company-stats {
    padding: 5rem 0;
    background: white;
}

.company-stats h2 {
    text-align: center;
    margin-bottom: 3rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.stat-card {
    text-align: center;
    padding: 2rem;
    background: #f7fafc;
    border-radius: 12px;
    border: 2px solid #e2e8f0;
    transition: all 0.3s ease;
}

.stat-card:hover,
.stat-card:focus-within {
    transform: translateY(-5px);
    border-color: #3182ce;
}

.stat-number {
    font-size: 3rem;
    font-weight: 700;
    color: #1a365d;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 1.1rem;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 1rem;
}

.leadership-team {
    padding: 5rem 0;
    background: linear-gradient(135deg, #edf2f7 0%, #e2e8f0 100%);
}

.leadership-team h2 {
    text-align: center;
    margin-bottom: 1rem;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
}

.team-member {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.team-member:hover,
.team-member:focus-within {
    transform: translateY(-5px);
}

.member-photo {
    margin-bottom: 1.5rem;
}

.photo-placeholder {
    width: 120px;
    height: 120px;
    background: #edf2f7;
    border: 2px dashed #cbd5e0;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: #4a5568;
    font-size: 0.9rem;
}

.member-title {
    color: #e53e3e;
    font-weight: 600;
    margin-bottom: 1rem;
}

.community-commitment {
    padding: 5rem 0;
    background: white;
}

.commitment-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    align-items: center;
}

.commitment-text p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.community-highlights {
    display: flex;
    gap: 2rem;
    margin-top: 2rem;
    flex-wrap: wrap;
}

.highlight-item {
    text-align: center;
}

.highlight-item strong {
    display: block;
    font-size: 1.5rem;
    color: #1a365d;
    font-weight: 700;
}

.highlight-item span {
    color: #4a5568;
    font-size: 0.9rem;
}

.commitment-image {
    display: flex;
    justify-content: center;
}

/* Responsive Design for About Page */
@media (max-width: 768px) {
    .story-content,
    .commitment-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .community-highlights {
        justify-content: center;
        flex-wrap: wrap;
    }
    .team-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

@media (max-width: 480px) {
    .story-content,
    .commitment-content {
        grid-template-columns: 1fr;
    }
    .team-member {
        padding: 1.5rem;
    }
}

/* CTA Section */
.cta-section {
    padding: 5rem 0;
    background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
    color: white;
    text-align: center;
}
.cta-actions a{
    background: #e53e3e;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    color: white;
}

.cta-section h2 {
    color: white;
    margin-bottom: 1rem;
}

.cta-section p {
    color: #bee3f8;
    font-size: 1.1rem;
    margin-bottom: 2rem;
}

.cta-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

@media (max-width: 768px) {
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
}
    </style>
    </head>
<body>
    <header class="site-header" role="banner">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>AppexInsurance</h1>
                    <span class="tagline">Your Road to Protection</span>
                </div>
                <nav class="main-navigation" role="navigation" aria-label="Main navigation">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#coverage">Coverage</a></li>
                        <li><a href="about.php" aria-current="page">About</a></li>
                        <li><a href="index.php#contact">Contact</a></li>
                        <li><a href="index.php#quote" class="cta-button">Get Quote</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main role="main">
        <section class="page-hero" aria-labelledby="about-heading">
            <div class="container">
                <h1 id="about-heading">About AppexInsurance</h1>
                <p class="hero-subtitle">Your trusted partner in auto insurance protection since 2008</p>
            </div>
        </section>

        <section class="about-story" aria-labelledby="story-heading">
            <div class="container">
                <div class="story-content">
                    <div class="story-text">
                        <h2 id="story-heading">Our Story</h2>
                        <p>AppexInsurance was founded in 2008 with a simple yet powerful mission: to provide reliable, affordable auto insurance coverage that truly protects what matters most to our customers. What started as a small regional insurance agency has grown into a trusted nationwide provider serving over 50,000 satisfied customers across all 50 states.</p>
                        
                        <p>Our founders recognized that the insurance industry was often complicated, impersonal, and focused more on profits than people. They set out to change that by creating a company that puts customers first, offers transparent pricing, and provides genuine support when it's needed most.</p>
                        
                        <p>Over the past 15+ years, we've built our reputation on three core principles: exceptional customer service, competitive pricing, and reliable claims processing. These values have guided every decision we've made and continue to shape our approach to serving our customers today.</p>
                    </div>
                    <aside class="story-image">
                        <div class="image-placeholder" role="img" aria-label="AppexInsurance company headquarters building">
                            <img class="image-placeholder" src="architecture-5585737_640.webp" alt="AppexInsurance company headquarters" loading="lazy">
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="mission-values" aria-labelledby="mission-heading">
            <div class="container">
                <h2 id="mission-heading">Our Mission & Values</h2>
                <div class="values-grid" role="list">
                    <article class="value-card" role="listitem">
                        <h3>Customer First</h3>
                        <p>Every decision we make is guided by what's best for our customers. We believe in treating each person with respect, honesty, and genuine care for their unique insurance needs.</p>
                    </article>
                    <article class="value-card" role="listitem">
                        <h3>Transparency</h3>
                        <p>No hidden fees, no confusing jargon, no surprises. We believe our customers deserve clear, straightforward information about their coverage and costs.</p>
                    </article>
                    <article class="value-card" role="listitem">
                        <h3>Reliability</h3>
                        <p>When you need us most, we're there. Our 24/7 claims support and fast processing times ensure you can get back on the road quickly after an incident.</p>
                    </article>
                    <article class="value-card" role="listitem">
                        <h3>Innovation</h3>
                        <p>We continuously invest in technology and processes that make insurance easier and more accessible, from our mobile app to our streamlined quote system.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="company-stats" aria-labelledby="stats-heading">
            <div class="container">
                <h2 id="stats-heading">AppexInsurance by the Numbers</h2>
                <div class="stats-grid" role="list">
                    <article class="stat-card" role="listitem">
                        <div class="stat-number" aria-label="50,000 plus">50,000+</div>
                        <div class="stat-label">Happy Customers</div>
                        <p>Drivers across America trust us to protect their vehicles and their peace of mind.</p>
                    </article>
                    <article class="stat-card" role="listitem">
                        <div class="stat-number" aria-label="15 plus">15+</div>
                        <div class="stat-label">Years of Experience</div>
                        <p>Over a decade and a half of serving customers and refining our insurance offerings.</p>
                    </article>
                    <article class="stat-card" role="listitem">
                        <div class="stat-number" aria-label="98 percent">98%</div>
                        <div class="stat-label">Customer Satisfaction</div>
                        <p>Our customers consistently rate us highly for service, value, and claims handling.</p>
                    </article>
                    <article class="stat-card" role="listitem">
                        <div class="stat-number" aria-label="24 hours 7 days">24/7</div>
                        <div class="stat-label">Claims Support</div>
                        <p>Round-the-clock assistance when you need to file a claim or get roadside help.</p>
                    </article>
                    <article class="stat-card" role="listitem">
                        <div class="stat-number">50</div>
                        <div class="stat-label">States Covered</div>
                        <p>Nationwide coverage with local agents who understand your state's requirements.</p>
                    </article>
                    <article class="stat-card" role="listitem">
                        <div class="stat-number" aria-label="A plus rating">A+</div>
                        <div class="stat-label">BBB Rating</div>
                        <p>Better Business Bureau accreditation reflects our commitment to ethical business practices.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="leadership-team" aria-labelledby="leadership-heading">
            <div class="container">
                <h2 id="leadership-heading">Our Customers</h2>
                <p class="section-intro">At AppexInsurance, we prioritize our customers' needs and strive to provide exceptional service and support.</p>
                <div class="team-grid" role="list">
                    <article class="team-member" role="listitem">
                        <div class="member-photo">
                            <div class="photo-placeholder" role="img" aria-label="Photo of Sarah Mitchell, CEO"><img class="photo-placeholder" src="woman-1851459_640.webp" alt="Sarah Mitchell photo" loading="lazy"></div>
                        </div>
                        <h3>Sarah Mitchell</h3>
                        <p class="member-title">Customer</p>
                        <p>Sarah has been a valued customer of AppexInsurance for over 5 years. She appreciates the personalized service and comprehensive coverage options available to her.</p>
                    </article>
                    
                    <article class="team-member" role="listitem">
                        <div class="member-photo">
                            <div class="photo-placeholder" role="img" aria-label="Photo of Michael Chen, CTO"><img class="photo-placeholder" src="beard-1845166_640.webp" alt="Michael Chen photo" loading="lazy"></div>
                        </div>
                        <h3>Michael Chen</h3>
                        <p class="member-title">Customer</p>
                        <p>Michael has been a loyal customer of AppexInsurance for over 3 years. He values the user-friendly online tools and responsive customer support that make managing his policy easy.</p>
                    </article>
                    
                    <article class="team-member" role="listitem">
                        <div class="member-photo">
                            <div class="photo-placeholder" role="img" aria-label="Photo of Jennifer Rodriguez, CCO"><img class="photo-placeholder" src="blonde-1868701_640.webp" alt="Jennifer Rodriguez photo" loading="lazy"></div>
                        </div>
                        <h3>Jennifer Rodriguez</h3>
                        <p class="member-title">Customer</p>
                        <p>Jennifer has been a loyal customer of AppexInsurance for over 4 years. She appreciates the quick claims process and the support she receives from her dedicated claims representative.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="community-commitment" aria-labelledby="community-heading">
            <div class="container">
                <h2 id="community-heading">Our Commitment to Community</h2>
                <div class="commitment-content">
                    <div class="commitment-text">
                        <p>At AppexInsurance, we believe in giving back to the communities we serve. Through our various community initiatives, we support local organizations focused on road safety education, driver training programs, and emergency response services.</p>
                        
                        <p>Our annual "Safe Roads Initiative" provides funding for driver education programs in high schools across the country. We also partner with local emergency responders to support their training and equipment needs, recognizing their vital role in keeping our roads safe.</p>
                        
                        <div class="community-highlights" role="list">
                            <div class="highlight-item" role="listitem">
                                <strong aria-label="500,000 dollars plus">$500K+</strong>
                                <span>Donated to road safety programs annually</span>
                            </div>
                            <div class="highlight-item" role="listitem">
                                <strong aria-label="100 plus">100+</strong>
                                <span>Schools supported through our education initiative</span>
                            </div>
                            <div class="highlight-item" role="listitem">
                                <strong aria-label="25 plus">25+</strong>
                                <span>Emergency response teams we partner with</span>
                            </div>
                        </div>
                    </div>
                    <aside class="commitment-image">
                        <div class="image-placeholder" role="img" aria-label="Community outreach event photo">
                            <img class="image-placeholder" src="social-media-3846597_640.webp" alt="Community outreach event" loading="lazy">
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="awards-recognition" aria-labelledby="awards-heading">
            <div class="container">
                <h2 id="awards-heading">Awards & Recognition</h2>
                <div class="awards-grid" role="list">
                    <article class="award-item" role="listitem">
                        <h3>Best Customer Service</h3>
                        <p class="award-year">2023</p>
                        <p>National Insurance Review Magazine</p>
                    </article>
                    <article class="award-item" role="listitem">
                        <h3>Top Digital Innovation</h3>
                        <p class="award-year">2022</p>
                        <p>InsurTech Excellence Awards</p>
                    </article>
                    <article class="award-item" role="listitem">
                        <h3>Community Impact Award</h3>
                        <p class="award-year">2021</p>
                        <p>National Safety Council</p>
                    </article>
                    <article class="award-item" role="listitem">
                        <h3>Employer of Choice</h3>
                        <p class="award-year">2020</p>
                        <p>Insurance Industry Association</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="cta-section" aria-labelledby="cta-heading">
            <div class="container">
                <h2 id="cta-heading">Ready to Experience the AppexInsurance Difference?</h2>
                <p>Join thousands of satisfied customers who trust us to protect what matters most.</p>
                <div class="cta-actions">
                    <a href="index.php#quote" class="primary-button">Get Your Free Quote</a>
                    <a href="index.php#contact" class="secondary-button">Contact Us Today</a>
                </div>
            </div>
        </section>

        <section id="faq" class="faq-section" aria-labelledby="faq-heading">
  <div class="container">
    <h2 id="faq-heading">Frequently Asked Questions</h2>
    <dl class="faq-list">
      <dt>Why do I need auto insurance?</dt>
      <dd>Auto insurance protects you from financial loss after an accident, helps cover medical expenses, and ensures compliance with state liability requirements. It's your safety net on the road. :contentReference[oaicite:1]{index=1}</dd>

      <dt>How are insurance premiums calculated?</dt>
      <dd>Premiums depend on factors like driving history, vehicle type, location, age, and coverage limits. Insurers assess the risk you bring and price your policy accordingly. :contentReference[oaicite:2]{index=2}</dd>

      <dt>What makes AppexInsurance different?</dt>
      <dd>We combine competitive rates with personalized service and a focus on fast claims processing. Our local expertise and strong carrier relationships help you get the best value. :contentReference[oaicite:3]{index=3}</dd>

      <dt>What is a deductible?</dt>
      <dd>A deductible is the amount you pay out of pocket before insurance kicks in. Choosing a higher deductible often lowers your premium, but means you'll pay more upfront in case of a claim. :contentReference[oaicite:4]{index=4}</dd>

      <dt>Can I adjust my coverage anytime?</dt>
      <dd>Yes! You can update coverage levels, add-ons, or adjust deductible amounts anytime during your policy term—just contact your agent for details. :contentReference[oaicite:5]{index=5}</dd>

      <dt>Will filing a claim increase my premiums?</dt>
      <dd>Not always. It depends on your insurer and your claims history. Minor claims may not affect your rate, but multiple claims or severe incidents could. :contentReference[oaicite:6]{index=6}</dd>
    </dl>
  </div>
</section>

    </main>

    <footer class="site-footer" role="contentinfo">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>AppexInsurance</h3>
                    <p>Protecting what matters most to you since 2008. Your trusted partner for reliable auto insurance coverage.</p>
                </div>
                
                <nav class="footer-section" aria-label="Quick links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#quote">Get Quote</a></li>
                        <li><a href="#coverage">Coverage Options</a></li>
                    </ul>
                </nav>
                
                <nav class="footer-section" aria-label="Support links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="about.php#faq">FAQ</a></li>
                        <li><a href="index.php#contact">Contact Us</a></li>
                    </ul>
                </nav>
                
                <nav class="footer-section" aria-label="Legal links">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 AppexInsurance. All rights reserved. Licensed in all 50 states.</p>
                <p class="disclaimer">AppexInsurance is a registered trademark. Coverage subject to policy terms and conditions.</p>
            </div>
        </div>
    </footer>
</body>
</html>