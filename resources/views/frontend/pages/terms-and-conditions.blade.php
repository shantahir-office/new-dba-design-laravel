





@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner min-h-auto lg:min-h-[40vh] relative flex flex-col justify-center items-center bg-primary lg:bg-[url('/assets/images/banners/service-bg.webp')] pt-[85px] pb-[105px]">
        <div class="container">
            <div class="row items-center justify-center text-center">
                <div class="w-full xl:w-10/12 4xl:w-7/12">
                    <h1 class=" text-white text-[clamp(22px,2.9vw,52px)] inline-block font-semibold">Terms & Conditions </h1>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Banner Section End --}}


    {{-- Privacy Policy Section Start --}}
    <section class="pt-0">
        <div class="container 4xl:max-w-[1661px]!">
            <div
                class="md:px-5 pt-20 [&>p]:font-poppins [&>p]:text-sm [&>p]:mb-5 [&>p]:4xl:mb-7 [&>p]:4xl:text-lg [&>p]:4xl:leading-[1.8] [&>p]:xl:text-base [&>h3]:font-exo [&>h3]:4xl:text-[48px] [&>h3]:xl:text-[30px] [&>h3]:lg:text-xl [&>h3]:text-base [&>h3]:font-bold [&>h3]:uppercase">
                <span class="text-black italic font-poppins text-lg mb-5 block">Effective Date: June 26, 2026</span>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">1. Introduction</span>
                <p>Welcome to OmniPaySol. These General Terms and Conditions ("Terms") govern your access to and use of our
                    payment processing services, website, and related products (collectively, the "Services"). By accessing
                    or using our Services, you agree to be bound by these Terms. If you do not agree with any part of these
                    Terms, please discontinue use of our Services immediately.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">2. Definitions</span>
                <p>For the purposes of these Terms, the following definitions apply:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>"OmniPaySol", "we", "us", or "our" refers to OmniPaySol and its affiliates, officers, employees,
                        agents, and partners.</li>
                    <li>"User", "you", or "your" refers to any individual, business, or entity that accesses or uses our
                        Services.</li>
                    <li>"Account" means the registered account you create to access certain features of our Services.</li>
                    <li>"Transaction" means any payment, transfer, or financial activity processed through our Services.
                    </li>
                    <li>"Merchant" means a business or individual that uses OmniPaySol to accept payments.</li>
                </ul>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">3. Eligibility</span>
                <p>To use our Services, you must:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Be at least 18 years of age or the legal age of majority in your jurisdiction.</li>
                    <li>Have the legal capacity to enter into a binding agreement.</li>
                    <li>Not be prohibited from using the Services under applicable laws or regulations.</li>
                    <li>Provide accurate, complete, and current information during registration.</li>
                </ul>
                <p>OmniPaySol reserves the right to refuse service or terminate accounts that do not meet eligibility
                    requirements.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">4. Account Registration and
                    Security</span>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">4.1 Account
                    Creation</span>
                <p>To access certain Services, you must create an Account by providing accurate and complete information.
                    You are responsible for maintaining the confidentiality of your account credentials and for all
                    activities that occur under your Account.</p>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">4.2 Account
                    Security</span>
                <p>You agree to:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Notify us immediately of any unauthorized use of your Account at {{ config('var.email') }} or
                        {{ config('var.phone') }}</li>
                    <li>Ensure that you log out from your Account at the end of each session.</li>
                    <li>Use strong, unique passwords and enable two-factor authentication where available.</li>
                </ul>
                <p>OmniPaySol will not be liable for any loss or damage arising from your failure to protect your Account
                    credentials.</p>

                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">5. Payment Services</span>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.1 Service
                    Description</span>
                <p>OmniPaySol provides payment processing and related financial technology services. Our Services enable
                    Merchants to accept payments from their customers through various payment methods including but not
                    limited to credit cards, debit cards, and electronic transfers.</p>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.2 Transaction
                    Processing</span>
                <p>All Transactions are subject to:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Applicable card network rules and regulations.</li>
                    <li>Anti-money laundering (AML) and Know Your Customer (KYC) requirements.</li>
                    <li>Applicable federal, state, and local laws.</li>
                    <li>OmniPaySol's fraud detection and risk management policies.</li>
                </ul>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.3 Fees and
                    Charges</span>
                <p>The use of our Services may be subject to fees as outlined in your service agreement. OmniPaySol
                    reserves the right to modify its fee structure upon reasonable notice. Continued use of the Services
                    after notice of fee changes constitutes acceptance of the new fees.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">6. Acceptable Use
                    Policy</span>
                <p>You agree to use our Services only for lawful purposes. The following activities are strictly prohibited:
                </p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Engaging in fraudulent, deceptive, or misleading activities.</li>
                    <li>Processing payments for illegal goods or services.</li>
                    <li>Violating any applicable laws, regulations, or third-party rights.</li>
                    <li>Attempting to circumvent security measures or gain unauthorized access.</li>
                    <li>Using the Services to transmit harmful, offensive, or malicious content.</li>
                    <li>Engaging in money laundering, terrorist financing, or other financial crimes.</li>
                </ul>
                <p>Violation of this Acceptable Use Policy may result in immediate suspension or termination of your
                    Account.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">7. Intellectual
                    Property</span>
                <p>All content, trademarks, logos, service marks, and trade names displayed through our Services are the
                    intellectual property of OmniPaySol or their respective owners. You are granted a limited,
                    non-exclusive, non-transferable license to access and use our Services for their intended purpose. You
                    may not reproduce, distribute, modify, create derivative works of, or commercially exploit any content
                    from our Services without express written permission.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">8. Privacy and Data
                    Protection</span>
                <p>Your use of our Services is also governed by our Privacy Policy, which is incorporated into these Terms
                    by reference. By using our Services, you consent to the collection, use, and sharing of your information
                    as described in our Privacy Policy. Please review our Privacy Policy carefully.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">9. Disclaimers and
                    Limitations of Liability</span>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">9.1 Disclaimer of
                    Warranties</span>
                <p class="uppercase">OUR SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT WARRANTIES OF
                    ANY KIND, EITHER EXPRESS OR IMPLIED. OmniPaySol DISCLAIMS ALL WARRANTIES, INCLUDING BUT NOT LIMITED TO
                    IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT.</p>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">9.2 Limitation of
                    Liability</span>
                <p class="uppercase">TO THE FULLEST EXTENT PERMITTED BY LAW, OmniPaySol SHALL NOT BE LIABLE FOR ANY
                    INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING LOSS OF PROFITS, DATA, OR
                    GOODWILL, ARISING FROM YOUR USE OF OR INABILITY TO USE OUR SERVICES.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">10. Indemnification</span>
                <p>You agree to indemnify, defend, and hold harmless OmniPaySol and its officers, directors, employees,
                    agents, and partners from and against any claims, liabilities, damages, losses, costs, and expenses
                    (including reasonable legal fees) arising from: (a) your use of the Services; (b) your violation of
                    these Terms; (c) your violation of any applicable laws or third-party rights; or (d) any content you
                    submit through our Services.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">11. Termination</span>
                <p>OmniPaySol may suspend or terminate your access to the Services at any time, with or without notice, for
                    any reason, including violation of these Terms. Upon termination, all licenses granted to you will
                    immediately cease. Sections 7, 9, 10, and 12 shall survive termination.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">12. Governing Law and Dispute
                    Resolution</span>
                <p>These Terms shall be governed by and construed in accordance with the laws of the United States and the
                    state in which OmniPaySol operates, without regard to conflict of law principles. Any disputes arising
                    from these Terms or your use of the Services shall first be attempted to be resolved through good-faith
                    negotiation. If resolution cannot be reached, disputes shall be subject to binding arbitration.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block"> 13. Changes to These
                    Terms</span>
                <p>OmniPaySol reserves the right to modify these Terms at any time. We will provide notice of significant
                    changes by updating the "Effective Date" at the top of this document and, where appropriate, by email
                    notification. Your continued use of the Services following notification of changes constitutes your
                    acceptance of the revised Terms.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">14. Contact
                    Information</span>
                <p>If you have any questions, concerns, or complaints regarding these Terms and Conditions, please contact
                    us:</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">OmniPaySol</span>
                <ul class="list-disc pl-5 mb-5">
                    <li>Phone: <a href="tel:{{ config('var.phone') }}"
                            class="hover:text-secondary">{{ config('var.phone') }}</a></li>
                    <li>Email: <a href="mailto:{{ config('var.email') }}"
                            class="hover:text-secondary">{{ config('var.email') }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    {{-- Privacy Policy Section End  --}}

@endsection
