// Exemple simple : animation d’apparition
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  card.addEventListener('mouseenter', () => {
    card.style.boxShadow = '0 12px 25px rgba(0,0,0,0.15)';
  });

  card.addEventListener('mouseleave', () => {
    card.style.boxShadow = '0 6px 18px rgba(0,0,0,0.08)';
  });
});

// Effet hover cartes
document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('mouseenter', () => {
    card.style.boxShadow = '0 12px 25px rgba(0,0,0,0.15)';
  });

  card.addEventListener('mouseleave', () => {
    card.style.boxShadow = '0 6px 18px rgba(0,0,0,0.08)';
  });
});

// Bouton "... plus"
document.querySelectorAll('.more-btn').forEach(button => {
  button.addEventListener('click', () => {
    const description = button.closest('.description');
    const shortText = description.querySelector('.short-text');
    const fullText = description.querySelector('.full-text');

    const isOpen = fullText.style.display === 'inline';

    if (isOpen) {
      fullText.style.display = 'none';
      shortText.style.display = 'inline';
      button.textContent = '… plus';
    } else {
      fullText.style.display = 'inline';
      shortText.style.display = 'none';
      button.textContent = '… moins';
    }
  });
});
