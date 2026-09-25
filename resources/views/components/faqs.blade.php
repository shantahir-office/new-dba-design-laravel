@props(['faqs' => null])

@php
    $faqs ??= [
        [
            'question' => 'What is OmniPaySol?',
            'answer' =>
                'OmniPaySol provides reliable payment processing and business payment solutions designed to make everyday transactions easier. Businesses can use OmniPaySol to manage payments, invoicing, POS transactions, and other essential payment needs through convenient and efficient solutions.',
        ],
        [
            'question' => ' What payment solutions does OmniPaySol offer?',
            'answer' =>
                'OmniPaySol offers a range of payment solutions to support different business needs. These include payment processing, POS systems, invoicing, online payments, and other tools designed to help businesses accept and manage customer payments efficiently.',
        ],
        [
            'question' => 'Can OmniPaySol support in-store payments?',
            'answer' =>
                'Yes. OmniPaySol provides POS and payment solutions that help businesses accept in-store payments conveniently. These solutions are designed to simplify transaction processing while helping businesses manage their daily payment activities more efficiently.',
        ],
        [
            'question' => 'Does OmniPaySol support online payments?',
            'answer' =>
                'Yes. OmniPaySol offers payment solutions that can help businesses accept payments through online channels. These solutions are designed to provide customers with convenient payment options while helping businesses manage online transactions more effectively.',
        ],
        [
            'question' => ' Can I use OmniPaySol for invoicing?',
            'answer' =>
                'Yes. OmniPaySol provides payment and invoicing solutions that can help businesses create, manage, and collect payments associated with customer invoices. This can make it easier to keep payment activities organized and streamline everyday billing processes.',
        ],
        [
            'question' => 'Is OmniPaySol suitable for small businesses?',
            'answer' =>
                'Yes. OmniPaySol offers payment solutions designed to support businesses of different sizes. Small businesses can use its payment processing, POS, and invoicing solutions to simplify transactions and manage their payment operations as their business grows.',
        ],
        [
            'question' => 'Does OmniPaySol offer POS systems?',
            'answer' =>
                'Yes. OmniPaySol provides POS solutions that help businesses process customer payments and manage everyday transactions. POS systems can support businesses with convenient payment acceptance and help simplify the management of sales and payment activities.',
        ],
        [
            'question' => 'Are OmniPaySol payment solutions secure?',
            'answer' =>
                'OmniPaySol uses established payment technologies and security practices to help businesses process transactions safely. Its solutions are designed to support secure payment processing while providing businesses and their customers with a convenient payment experience.',
        ],
        [
            'question' => ' How can I get started with OmniPaySol?',
            'answer' =>
                'Getting started with OmniPaySol is simple. Businesses can contact the OmniPaySol team to discuss their payment requirements and explore suitable solutions. The team can help identify payment processing, POS, invoicing, or other options based on the business is needs.',
        ],
    ];
@endphp

<div class="container">
    <div class="grid grid-cols-1">
        {{-- <div class="hidden lg:block">
            <img loading="lazy" src="{{ asset('assets/images/faq-device.svg') }}" alt="Faq Device Image" class="h-auto"
                width="481" height="1042">
        </div> --}}
        <div id="faqAccordion">
            <div class="mx-auto text-center">
                <h2 class="section-title mb-4 text-black">Frequently Asked Questions</h2>
            </div>
            @foreach ($faqs as $index => $faq)
                @php $isFirst = $index === 0; @endphp

                <div @class(['border-b border-[#ADADAD]' => !$loop->last])>
                    <h2 id="heading{{ $index }}" class="relative mb-0">
                        <button type="button"
                            class="group relative flex w-full items-start gap-5 py-3 xl:py-4 text-left transition-all duration-300"
                            data-twe-collapse-init {{ $isFirst ? '' : 'data-twe-collapse-collapsed' }}
                            data-twe-target="#collapse{{ $index }}"
                            aria-expanded="{{ $isFirst ? 'true' : 'false' }}"
                            aria-controls="collapse{{ $index }}">
                            <span
                                class="flex-1 font-poppins font-semibold text-[15px] leading-normal xl:text-base 2xl:text-[22px] group-transition-all duration-300">
                                {{ $faq['question'] }}
                            </span>

                            <svg class="faq-active-shape absolute bottom-10 left-4 z-[-1] translate-y-full group-transition-all duration-300"
                                width="62" height="41" viewBox="0 0 62 41" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 39C24.3404 36.795 26.0035 8.7282 25.5426 0H61.5C49.3298 36.3828 16.5957 44.5125 0 39Z"
                                    fill="#2B2A6C" />
                            </svg>
                        </button>
                    </h2>


                    <div id="collapse{{ $index }}" class="{{ $isFirst ? '' : 'hidden' }}" data-twe-collapse-item
                        {{ $isFirst ? 'data-twe-collapse-show' : '' }} data-twe-parent="#faqAccordion">
                        <div
                            class="pb-6 pt-[23px] font-poppins text-black leading-normal text-[14px] xl:text-base 4xl:text-[22px] max-w-[1610px]">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
