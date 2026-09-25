@extends('components.layouts.web.master')
@section('main-content')
    {{-- Hero Banner Section Start --}}
    <section
        class="hero-banner min-h-auto lg:min-h-[40vh] relative flex flex-col justify-center items-center bg-primary lg:bg-[url('/assets/images/banners/service-bg.webp')] pt-[85px] pb-[105px]">
        <div class="container">
            <div class="row items-center justify-center text-center">
                <div class="w-full xl:w-10/12 4xl:w-7/12">
                    <h1 class=" text-white text-[clamp(22px,2.9vw,52px)] inline-block font-semibold">Privacy Policy </h1>
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
                <p>OmniPaySol ("we", "us", or "our") is committed to protecting your privacy. This Privacy Policy explains
                    how we collect, use, disclose, and safeguard your personal information when you use our payment
                    processing services, website, and related products (collectively, the "Services"). Please read this
                    policy carefully. If you disagree with its terms, please discontinue use of our Services. </p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">2. Information We
                    Collect</span>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">2.1 Information You
                    Provide</span>
                <p>We collect information you provide directly to us, including:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li><strong>Identity Information:</strong> Full name, date of birth, and government-issued
                        identification numbers.</li>
                    <li><strong>Contact Information:</strong> Email address, phone number, and mailing address.</li>
                    <li><strong>Financial Information:</strong> Bank account details, payment card numbers (processed
                        securely), and transaction history.</li>
                    <li><strong>Business Information:</strong> Business name, registration number, and tax identification
                        number (for Merchants).</li>
                    <li><strong>Communications:</strong> Messages, inquiries, or feedback you send to us.</li>
                </ul>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">2.2 Information
                    Collected Automatically</span>
                <p>When you access our Services, we automatically collect certain technical information:</p>

                <ul class="list-disc pl-5 mb-5">
                    <li><strong>Device Information:</strong> IP address, browser type, operating system, and device
                        identifiers.</li>
                    <li><strong>Usage Data:</strong> Pages visited, features used, time spent, and click patterns.</li>
                    <li><strong>Log Data:</strong> Access times, error logs, and referring URLs.</li>
                    <li><strong>Location Data:</strong> General geographic location derived from your IP address.</li>
                </ul>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">2.3 Information from
                    Third Parties</span>
                <p>We may receive information about you from: </p>

                <ul class="list-disc pl-5 mb-5">
                    <li>Identity Verification and Fraud Prevention Services</li>
                    <li>Credit Reporting Agencies</li>
                    <li>Business Partners and Payment Networks</li>
                    <li>Publicly Available Databases and Government Records</li>
                </ul>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">3. How We Use Your
                    Information</span>
                <p>OmniPaySol uses your personal information for the following purposes:</p>

                <ul class="list-disc pl-5 mb-5">
                    <li><strong>Service Delivery:</strong> To process transactions, manage your Account, and provide
                        customer support.</li>
                    <li><strong>Identity Verification:</strong> To verify your identity and comply with KYC/AML obligations.
                    </li>
                    <li><strong>Fraud Prevention:</strong> To detect, investigate, and prevent fraudulent transactions and
                        abuse.</li>
                    <li><strong>Legal Compliance:</strong> To comply with applicable laws, regulations, and court orders.
                    </li>
                    <li><strong>Communication:</strong> To send service updates, security alerts, and support messages.</li>
                    <li><strong>Improvement:</strong> To analyze usage patterns and improve the functionality and security
                        of our Services.</li>
                    <li><strong>Marketing:</strong> With your consent, to send promotional communications about our products
                        and services.</li>
                </ul>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">4. Legal Basis for
                    Processing</span>
                <p>We process your personal information on the following legal bases:</p>

                <ul class="list-disc pl-5 mb-5">
                    <li><strong>Contractual Necessity:</strong> Processing required to fulfill our agreement with you and
                        provide the Services.</li>
                    <li><strong>Legal Obligation:</strong> Processing required to comply with applicable laws and
                        regulations, including financial regulations.</li>
                    <li><strong>Legitimate Interests:</strong> Processing for fraud prevention, security, and service
                        improvement, where your interests do not override ours.</li>
                    <li><strong>Consent:</strong> Processing based on your explicit consent, which you may withdraw at any
                        time.</li>
                </ul>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">5. Sharing Your
                    Information</span>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.1 Service
                    Providers</span>
                <p>We may share your information with trusted third-party service providers who assist us in operating our
                    business, including technology providers, payment networks, identity verification services, and
                    analytics providers. These providers are contractually obligated to protect your information and use it
                    only for specified purposes.</p>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.2 Legal
                    Requirements</span>
                <p>We may disclose your information when required by law, including to:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Comply with legal process, court orders, or government requests.</li>
                    <li>Enforce our Terms and Conditions.</li>
                    <li>Prevent fraud or address security issues.</li>
                    <li>Protect the rights, property, or safety of OmniPaySol, our users, or others.</li>
                </ul>
                <span class="font-semibold text-black font-poppins text-base lg:text-xl mb-5 block">5.3 Business
                    Transfers</span>
                <p>In the event of a merger, acquisition, or sale of all or a portion of our assets, your personal
                    information may be transferred to the acquiring entity, subject to the same privacy protections outlined
                    in this Policy.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">6. Data Retention</span>
                <p>We retain your personal information for as long as necessary to provide the Services, comply with legal
                    obligations, resolve disputes, and enforce our agreements. Financial transaction records are typically
                    retained for a minimum of seven (7) years as required by applicable regulations. When data is no longer
                    needed, we securely delete or anonymize it.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">7. Data Security</span>
                <p>OmniPaySol implements industry-standard security measures to protect your personal information,
                    including:</p>
                <ul class="list-disc pl-5 mb-5">
                    <li>Encryption of data in transit and at rest using TLS/SSL and AES-256.</li>
                    <li>Access controls limiting information access to authorized personnel only. </li>
                    <li>Regular security assessments, penetration testing, and audits.</li>
                    <li>PCI DSS compliance for payment card data.</li>
                </ul>
                <p>While we take rigorous steps to protect your information, no method of transmission or storage is 100%
                    secure. We encourage you to use strong passwords and report any suspicious activity immediately.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">8. Your Rights and
                    Choices</span>
                <p>Depending on your jurisdiction, you may have the following rights regarding your personal information:
                </p>

                <ul class="list-disc pl-5 mb-5">
                    <li><strong>Access:</strong> Request a copy of the personal information we hold about you.</li>
                    <li><strong>Correction:</strong> Request correction of inaccurate or incomplete information.</li>
                    <li><strong>Deletion:</strong> Request deletion of your personal information, subject to legal retention
                        requirements.</li>
                    <li><strong>Portability:</strong> Request transfer of your data in a structured, machine-readable
                        format.</li>
                    <li><strong>Objection:</strong> Object to certain types of processing, including direct marketing.</li>
                    <li><strong>Withdrawal of Consent:</strong> Withdraw consent for consent-based processing at any time.
                    </li>
                </ul>
                <p>To exercise any of these rights, please contact us at {{ config('var.email') }} or call {{ config('var.phone') }}. We
                    will respond to your request within the timeframe required by applicable law.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">9. Cookies and Tracking
                    Technologies</span>
                <p>We use cookies and similar tracking technologies to enhance your experience on our Services. For detailed
                    information about the cookies we use and how to manage your preferences, please refer to our separate
                    Cookies Policy.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">10. International Data
                    Transfers</span>
                <p>OmniPaySol operates primarily in the United States. If you access our Services from outside the United
                    States, your information may be transferred to and processed in the United States. By using our
                    Services, you consent to such transfers. We ensure appropriate safeguards are in place for international
                    transfers, including standard contractual clauses where required.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">11. Children's Privacy</span>
                <p>Our Services are not directed to individuals under the age of 18. We do not knowingly collect personal
                    information from children. If you believe we have inadvertently collected information from a minor,
                    please contact us immediately at {{ config('var.email') }} so we can take appropriate action.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">12. Third-Party Links</span>
                <p>Our Services may contain links to third-party websites or services. We are not responsible for the
                    privacy practices of these third parties. We encourage you to review the privacy policies of any
                    third-party sites you visit.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">13. Changes to this
                    Policy</span>
                <p>We may update this Privacy Policy from time to time. We will notify you of material changes by updating
                    the "Effective Date" at the top of this document and, where required by law, by providing additional
                    notice (such as via email). Your continued use of the Services after the effective date of the revised
                    Policy constitutes your acceptance of the changes.</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">14. Contact Us</span>
                <p>If you have questions, concerns, or requests regarding this Privacy Policy or our data practices, please
                    contact our Privacy Team:</p>
                <span class="font-bold text-black font-poppins text-lg lg:text-2xl mb-5 block">OmniPaySol</span>
                <ul class="list-disc pl-5 mb-5">
                    <li>Phone: <a href="tel:{{ config('var.phone') }}" class="hover:text-secondary">{{ config('var.phone') }}</a></li>
                    <li>Email: <a href="mailto:{{ config('var.email') }}" class="hover:text-secondary">{{ config('var.email') }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    {{-- Privacy Policy Section End  --}}

@endsection
