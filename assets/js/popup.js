document.addEventListener('DOMContentLoaded', () => {
    const reportLinks = document.querySelectorAll('#report-links a');
    const passwordModal = document.getElementById('password-modal'); 
    const reportNameElement = document.getElementById('report-name'); 
    const adminPasswordInput = document.getElementById('admin-password'); 
    const submitPasswordButton = document.getElementById('submit-password'); 
    const closeModalButton = document.getElementById('close-modal'); 
    const errorMessage = document.getElementById('error-message'); 
  
    const correctPassword = 'admin123';
    let selectedReportUrl = ''; 
  
    
    reportLinks.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault(); 
        selectedReportUrl = link.getAttribute('href');
        const reportName = link.getAttribute('data-report');
        reportNameElement.textContent = `You are trying to access: ${reportName}`;
        passwordModal.style.display = 'block';
      });
    });
  
    
    submitPasswordButton.addEventListener('click', () => {
      const enteredPassword = adminPasswordInput.value;
      if (enteredPassword === correctPassword) {
        window.location.href = selectedReportUrl;
      } else {
        errorMessage.style.display = 'block';
      }
    });
  
    
    closeModalButton.addEventListener('click', () => {
      passwordModal.style.display = 'none';
      adminPasswordInput.value = '';
      errorMessage.style.display = 'none';
    });
  
    
    window.addEventListener('click', (e) => {
      if (e.target === passwordModal) {
        passwordModal.style.display = 'none';
        adminPasswordInput.value = '';
        errorMessage.style.display = 'none';
      }
    });
  });
  