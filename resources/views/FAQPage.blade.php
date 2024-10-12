@extends('app')

@section('content')
<div class="container mx-auto px-4 py-8">   

    <h1 class="text-3xl font-bold text-center text-indigo-500">Frequently Asked Questions</h1>

    <div class="accordion">
      <div class="accordion-item bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-indigo-400 cursor-pointer">Shipping & Delivery</h2>
        <div class="accordion-content hidden">
          <ul class="text-gray-400 mt-4">
            <li>What are your shipping options?</li>
              <li>We offer standard shipping and expedited shipping. Standard shipping typically takes 3-5 business days, while expedited shipping takes 1-2 business days.</li>
            <li>How long does shipping take?</li>
            <li>Shipping times vary depending on your location and the shipping option you choose. Please refer to our shipping rates and times for more information.</li>
            <li>Do you ship internationally?</li>
            <li>Yes, we ship internationally to most countries. Please note that international shipping times and costs may vary.</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-indigo-400 cursor-pointer">Returns & Exchanges</h2>
        <div class="accordion-content hidden">
          <ul class="text-gray-400 mt-4">
            <li>What is your return policy?</li>
                <li>You may return eligible items within 30 days of purchase for a full refund. Items must be in new and unused condition with all tags attached.</li>
            <li>How do I return an item?</li>
                <li>To return an item, please contact our customer support team for a return authorization number. Once you have the authorization number, you can ship the item back to us at your own expense.</li>
            <li>Can I exchange an item?</li>
                <li>Yes, you can exchange an item for a different size or color. Please contact our customer support team for assistance.</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item bg-gray-800 p-4 rounded-lg">
        <h2 class="text-2xl font-semibold text-indigo-400 cursor-pointer">Payment Methods</h2>
        <div class="accordion-content hidden">
          <ul class="text-gray-400 mt-4">
            <li>What payment methods do you accept?</li>
            <li>We accept major credit cards (Visa, Mastercard, American Express), debit cards, and PayPal.</li>   

            <li>Is my payment information secure?</li>
            <li>Yes, your payment information is secure. We use industry-standard encryption to protect your data.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script>
   const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('h2');   

  const content = item.querySelector('.accordion-content');

  header.addEventListener('click', () => {
    content.classList.toggle('hidden');
  });
});

  </script>
    
  @endsection