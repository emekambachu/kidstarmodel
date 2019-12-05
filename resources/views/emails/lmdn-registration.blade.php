
<img src="{{ asset('images/kidstar_models_logo.png') }}" width="100">

<h3>Registration Complete</h3>

<h3>Hello {{ $surname }} {{ $othernames }},</h3>

<p>
    Thank you for completing your application process, your application process would continue as soon as we confirm your payment.<br>

    <strong>Details of your application</strong><br><br>

    <strong>Age:</strong> {{ $age }}<br>

    <strong>Health Issues:</strong> {{ $health_issues ? 'Yes' : 'No' }}<br>

    <strong>Health Details:</strong> {{ $health_details  }}<br>

    <strong>Nationality:</strong> {{ $nationality }}<br>

    <strong>State:</strong> {{ $state }}<br>

    <strong>City:</strong> {{ $city }}<br>

    <strong>Address:</strong> {{ $address }}<br>

    <strong>Vital State:</strong> {{ $vital_state }}<br>

    <strong>School Name:</strong> {{ $school_name }}<br>

    <strong>School Class:</strong> {{ $school_class }}<br>

    <strong>Height:</strong> {{ $height }}<br>

    <strong>Bust:</strong> {{ $bust }}<br>

    <strong>Waist:</strong> {{ $waist }}<br>

    <strong>Hips:</strong> {{ $hips }}<br>

    <strong>1. In one sentence, what does the word beauty mean to you?:</strong><br> {{ $question1 }}<br>

    <strong>2. In one sentence, what is the motivation behind becoming a model?:</strong><br> {{ $question2 }}<br>

    <strong>3. In one sentence, what do you think makes a person attractive?:</strong><br> {{ $question3 }}<br>

    <strong>4. Have you been in any other agency before? If yes, Name the year?:</strong><br> {{ $question4 }}<br>

    <strong>5. Why did you choose to be part of Kid Star Models Modeling Agency:</strong><br> {{ $question5 }}<br>

    <strong>Parent Names:</strong> {{ $parent_surname }} {{ $parent_othernames }}<br>

    <strong>Parent Mobile:</strong> {{ $parent_mobile }}<br>

    <strong>Parent Email:</strong> {{ $parent_email }}<br>

    <strong>I HEREBY AGREE THAT THE INFORMATION PROVIDED ABOVE IS TRUE AND ACCURATE AND WOULD LIKE TO BE INCLUDED IN THIS YEAR'S LMDN BEAUTY PAGEANT:</strong> {{ $terms1 }}<br>
    <strong>I HEREBY AGREE THAT AT THE TIME OF THE SUBMISSION OF THIS APPLICATION, I AM AT LEAST 7 YEARS OLD AND NOT OLDER THAN 12 YEARS OLD:</strong> {{ $terms2 }}<br>
    <strong>I HEREBY AGREE TO BE BOUND BY THE TERMS AND CONDITIONS STATED IN THE ELIGIBILITY CRITERIA FOR THE LMDN BEAUTY PAGEANT:</strong> {{ $terms3 }}<br>

</p>
