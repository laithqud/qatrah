// Contact Us Page JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Email configuration - Change this to your desired email
    const CONTACT_EMAIL = 'info@qatret-ghaith.com';
    
    // Form submission with mailto
    const form = document.getElementById('contact-form');
    const submitBtn = document.querySelector('.submit-btn');
    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
              // Get form values
            const userName = document.getElementById('user-name').value.trim();
            const messageSubject = document.getElementById('message-subject').value.trim();
            const userMessage = document.getElementById('user-message').value.trim();
            
            // Validate form
            if (!userName || !messageSubject || !userMessage) {
                alert('يرجى ملء جميع الحقول المطلوبة');
                return;
            }
            
            // Create email content
            const subject = encodeURIComponent(`${messageSubject} - من ${userName}`);
            const body = encodeURIComponent(`
الاسم: ${userName}
موضوع الرسالة: ${messageSubject}

الرسالة:
${userMessage}

---
تم إرسال هذه الرسالة من موقع قطرة غيث
            `.trim());
            
            // Create mailto link
            const mailtoLink = `mailto:${CONTACT_EMAIL}?subject=${subject}&body=${body}`;
            
            // Add loading state to button
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'جارٍ فتح تطبيق البريد...';
            submitBtn.disabled = true;
            
            // Open email client
            window.location.href = mailtoLink;
            
            // Reset button after a short delay
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                
                // Show success message
                showSuccessMessage('تم فتح تطبيق البريد الإلكتروني! أكمل إرسال الرسالة من خلال التطبيق.');
                
                // Clear form
                form.reset();
            }, 1500);
        });
    }

    // Show success message function
    function showSuccessMessage(message) {
        // Remove existing alerts
        const existingAlert = document.querySelector('.alert-success');
        if (existingAlert) {
            existingAlert.remove();
        }
        
        // Create new alert
        const alert = document.createElement('div');
        alert.className = 'alert alert-success nunito-font';
        alert.textContent = message;
        
        // Insert alert before form
        const formContainer = document.querySelector('.contact-form-container');
        const formTitle = document.querySelector('.contact-form-title');
        formContainer.insertBefore(alert, formTitle.nextSibling);
        
        // Remove alert after 5 seconds
        setTimeout(() => {
            alert.remove();
        }, 5000);
    }

    // Enhanced form validation
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('error')) {
                validateField(this);
            }
        });
    });    function validateField(field) {
        const value = field.value.trim();
        let isValid = true;
        
        // Remove existing error styling
        field.classList.remove('error');
        field.style.borderColor = '';
        
        // Check if field is required and empty
        if (field.hasAttribute('required') && value === '') {
            isValid = false;
        }
        
        // Add error styling if invalid
        if (!isValid) {
            field.classList.add('error');
            field.style.borderColor = '#dc3545';
        } else if (value !== '') {
            field.style.borderColor = 'var(--primary-1)';
        }
        
        return isValid;
    }

    // Smooth scrolling for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add hover effects to contact info cards
    const contactCards = document.querySelectorAll('.contact-info-card');
    contactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});
