function faq(faqBlocks) {
  faqBlocks.forEach(faqBlock => {
    const faqSections = faqBlock.querySelectorAll('.schema-faq-section');
    faqSections.forEach(faqSection => {
      const faqQuestion = faqSection.querySelector('.schema-faq-question'),
        faqAnswer = faqSection.querySelector('.schema-faq-answer');
      faqQuestion.addEventListener('click', () => {
        faqSection.classList.toggle('active');
      });
    });
  });
}
export default faq;