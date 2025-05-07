document.getElementById('generate-resume').addEventListener('click', function () {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const linkedin = document.getElementById('linkedin').value;
    const website = document.getElementById('website').value;
    const education = document.getElementById('education').value;
    const experience = document.getElementById('experience').value;
    const projects = document.getElementById('projects').value;
    const skills = document.getElementById('skills').value;
    const hobbies = document.getElementById('hobbies').value;

    if (name && email && phone && address && education && experience && projects && skills) {
        const resumeContent = `
            <h3>Personal Information</h3>
            <p><strong>Name:</strong> ${name}</p>
            <p><strong>Email:</strong> ${email}</p>
            <p><strong>Phone:</strong> ${phone}</p>
            <p><strong>Address:</strong> ${address}</p>
            <p><strong>LinkedIn:</strong> <a href="${linkedin}" target="_blank">${linkedin}</a></p>
            <p><strong>Website:</strong> <a href="${website}" target="_blank">${website}</a></p>

            <h3>Education</h3>
            <p>${education}</p>

            <h3>Work Experience</h3>
            <p>${experience}</p>

            <h3>Projects</h3>
            <p>${projects}</p>

            <h3>Skills</h3>
            <p>${skills}</p>

            <h3>Hobbies</h3>
            <p>${hobbies || "Not provided"}</p>
        `;

        document.getElementById('resume-content').innerHTML = resumeContent;
        document.getElementById('resume-form').classList.add('hidden');
        document.getElementById('resume-output').classList.remove('hidden');
    } else {
        alert('Please fill in all required fields.');
    }
});

document.getElementById('edit-resume').addEventListener('click', function () {
    document.getElementById('resume-form').classList.remove('hidden');
    document.getElementById('resume-output').classList.add('hidden');
});

