<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailed Resume Builder</title>
    <link rel="stylesheet" href="2_ResumeBuilder.css">
</head>
<body>
    <?php
    // Initialize variables to store form data
    $name = $email = $phone = $address = $linkedin = $website = $education = $experience = $projects = $skills = $hobbies = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $linkedin = htmlspecialchars($_POST['linkedin']);
        $website = htmlspecialchars($_POST['website']);
        $education = htmlspecialchars($_POST['education']);
        $experience = htmlspecialchars($_POST['experience']);
        $projects = htmlspecialchars($_POST['projects']);
        $skills = htmlspecialchars($_POST['skills']);
        $hobbies = htmlspecialchars($_POST['hobbies']);
    }
    ?>

    <div class="container">
        <h1 style="font-family:'Times New Roman', Times, serif;">RESUME</h1>
        <form id="resume-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <!-- Personal Information -->
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" value="<?php echo $phone; ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" placeholder="Enter your address" required><?php echo $address; ?></textarea>
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn Profile:</label>
                <input type="url" id="linkedin" name="linkedin" placeholder="Enter LinkedIn URL" value="<?php echo $linkedin; ?>">
            </div>
            <div class="form-group">
                <label for="website">Personal Website/Portfolio:</label>
                <input type="url" id="website" name="website" placeholder="Enter your website URL" value="<?php echo $website; ?>">
            </div>

            <!-- Education -->
            <div class="form-group">
                <label for="education">Education:</label>
                <textarea id="education" name="education" placeholder="List your educational qualifications with details" required><?php echo $education; ?></textarea>
            </div>

            <!-- Work Experience -->
            <div class="form-group">
                <label for="experience">Work Experience:</label>
                <textarea id="experience" name="experience" placeholder="List your job roles, responsibilities, and achievements" required><?php echo $experience; ?></textarea>
            </div>

            <!-- Projects -->
            <div class="form-group">
                <label for="projects">Projects:</label>
                <textarea id="projects" name="projects" placeholder="List significant projects you've worked on" required><?php echo $projects; ?></textarea>
            </div>

            <!-- Skills -->
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" placeholder="List your technical and soft skills" required><?php echo $skills; ?></textarea>
            </div>

            <!-- Hobbies -->
            <div class="form-group">
                <label for="hobbies">Hobbies:</label>
                <textarea id="hobbies" name="hobbies" placeholder="Optional: List your hobbies"><?php echo $hobbies; ?></textarea>
            </div>

            <button type="submit" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Generate Resume</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div id="resume-output">
            <h2>Resume Preview</h2>
            <div id="resume-content">
                <h3><?php echo $name; ?></h3>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Phone:</strong> <?php echo $phone; ?></p>
                <p><strong>Address:</strong> <?php echo $address; ?></p>
                <p><strong>LinkedIn:</strong> <a href="<?php echo $linkedin; ?>"><?php echo $linkedin; ?></a></p>
                <p><strong>Website:</strong> <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
                <h4>Education</h4>
                <p><?php echo nl2br($education); ?></p>
                <h4>Work Experience</h4>
                <p><?php echo nl2br($experience); ?></p>
                <h4>Projects</h4>
                <p><?php echo nl2br($projects); ?></p>
                <h4>Skills</h4>
                <p><?php echo nl2br($skills); ?></p>
                <?php if (!empty($hobbies)): ?>
                <h4>Hobbies</h4>
                <p><?php echo nl2br($hobbies); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
