<div class="content">
    <div class="content-chat_header">
        <div class="celebrity-chat_interface">
            <div class="celebrity-icon">
                <img src="./images/celebrity-icon.jpg" alt="" class="celebrity-icon_img">
            </div>

            <div class="celebrity-status">
                <span class="celebrity-name">
                    <?= $doc ?>
                </span>
                <div style="display: flex; justify-content: flex-start; align-items: center;">
                    <div class="status-code"></div>
                    <div class="status">
                        हमसे संपर्क करें
                    </div>
                </div>
            </div>
        </div>
        <div class="free">
            <button>
                नि: शुल्क परामर्श
            </button>
        </div>
    </div>
    <div class="content-chat">
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    नमस्ते! आप
                    <?php echo $doc; ?> की व्यक्तिगत वेबसाइट पर हैं। यहां आप बता सकते हैं कि आपको क्या परेशानी है। और
                    मैं आपको ऑनलाइन डायग्नोस्टिक्स द्वारा प्राप्त इलाज का निर्देशन दूंगा।
                </p>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    कृपया निम्नलिखित सवालों का उत्तर दें और कुछ ही मिनटों में अपने मामले के लिए व्यक्तिगत सलाह प्राप्त
                    करें
                </p>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    कृपया अपनी आयु दर्ज करें
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>35 वर्ष से कम</button>
                    <button class="btn operating-btn" next-message>36-45 वर्ष</button>
                    <button class="btn operating-btn" next-message>46-55 वर्ष</button>
                    <button class="btn operating-btn" next-message>55-65 वर्ष</button>
                    <button class="btn operating-btn" next-message set-result=3>66 वर्ष से अधिक</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    कृपया अपना लिंग दर्ज करें
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message=9>पुरुष</button>
                    <button class="btn operating-btn" next-message=7>महिला</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आप हॉर्मोनल गर्भनिरोधक या हॉर्मोन प्रतिस्थापन चिकित्सा कर रहे हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आप विटामिन डी लेते हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आप कैसे जीवन जी रहे हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>मैं एक सक्रिय जीवन जीने का
                        प्रयास कर रहा हूँ</button>
                    <button class="btn operating-btn" next-message>शारीरिक गतिविधि आवर्ती है</button>
                    <button class="btn operating-btn" next-message>बैठे रहने की आदत</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    कृपया काम और शारीरिक गतिविधि के प्रकार दर्ज करें? (कई जवाबों का विकल्प)
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>बैठे काम</button>
                    <button class="btn operating-btn" next-message>स्थिर खड़े होकर काम</button>
                    <button class="btn operating-btn" next-message>भारी वस्तुओं को बार-बार उठाना</button>
                    <button class="btn operating-btn" next-message>चलने के साथ काम</button>
                    <button class="btn operating-btn" next-message>ऊची शारीरिक गतिविधि, भारी शारीरिक
                        काम</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आप खेल खेलते हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message=17>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आप किस प्रकार का खेल पसंद करते हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>टीम खेल (फुटबॉल, बास्केटबॉल, वॉलीबॉल)</button>
                    <button class="btn operating-btn" next-message>दौड़</button>
                    <button class="btn operating-btn" next-message>चलना</button>
                    <button class="btn operating-btn" next-message>शक्ति वर्धन</button>
                    <button class="btn operating-btn" next-message>योग, स्ट्रेचिंग</button>
                    <button class="btn operating-btn" next-message>नृत्य</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आपके पास हड्डियों या जोड़ों, टेंडन्स, मांसपेशियों के चोट या घाव हुआ है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message set-result=2>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आपकी हड्डियों, मांसपेशियों, टेंडन्स पर कोई सर्जरी हुई है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg  stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आपके पास सूजन से संबंधित कोई आनुवांशिक बीमारी है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg  stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>नहीं</button>
                    <button class="btn operating-btn" next-message set-result=1>रेमटॉइड आर्थराइटिस</button>
                    <button class="btn operating-btn" next-message set-result=1>गठिया</button>
                    <button class="btn operating-btn" next-message set-result=1>स्पॉन्डिलोआर्थ्राइटिस</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आपका वजन बढ़ गया है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>नहीं</button>
                    <button class="btn operating-btn" next-message>अतिरिक्त वजन है</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आपको क्या ज्यादा परेशानी होती है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg" answerMin=3>
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn-selector">संयमित सूजन और
                        स्पाइनल दर्द</button>
                    <button class="btn-selector">सुबह की अकड़न</button>
                    <button class="btn-selector">शाम का दर्द और थकान मांसपेशियों में</button>
                    <button class="btn-selector">सूजन और जोड़ों के क्षेत्र में लाली</button>
                    <button class="btn-selector">स्पाइनल दर्द के साथ पिंकिंग वाला दर्द</button>
                    <button class="btn-selector">जोड़ों और स्पाइनल में गतिमान में प्रतिबंध</button>

                    <button class="btn selector-check btn-purple" next-message=29>उत्तर दें</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या आपके पास जोड़ों या स्पाइनल की गद्दी होती है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    उपरोक्त शिकायतें कितनी बार आती हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>रोज़ाना</button>
                    <button class="btn operating-btn" next-message>प्रति सप्ताह 3-4 बार</button>
                    <button class="btn operating-btn" next-message>प्रति सप्ताह एक बार</button>
                    <button class="btn operating-btn" next-message>महीने में कई बार</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आमतौर पर दर्द की अवधि क्या होती है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>अनिश्चित समय के लिए</button>
                    <button class="btn operating-btn" next-message>1-2 सप्ताह</button>
                    <button class="btn operating-btn" next-message>2-4 दिन</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    जब दर्द का प्रकोप होता है, तो आप क्या लेते हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>कुछ नहीं</button>
                    <button class="btn operating-btn" next-message>एंटी-इंफ्लेमेटरी टैबलेट</button>
                    <button class="btn operating-btn" next-message>पैनकिलर</button>
                    <button class="btn operating-btn" next-message>स्थानिक मलहम और कम्प्रेस्स</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    क्या स्वायत्त उपचार से कोई प्रभाव होता है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>हां</button>
                    <button class="btn operating-btn" next-message>नहीं</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    स्वायत्त उपचार कितनी देर तक सहायक होता है?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" next-message>1-2 घंटे तक</button>
                    <button class="btn operating-btn" next-message>3-4 घंटे तक</button>
                    <button class="btn operating-btn" next-message>5-8 घंटे तक</button>
                </div>
            </div>
        </div>

        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आप उपचार योजना को कितनी बार बदलते हैं?
                </p>
            </div>
        </div>

        <div class="msg-wrapper right-msg stop-msg">
            <div class="msg stop-msg">
                <div class="btn-wrapper">
                    <button class="btn operating-btn" result>1-2 दवाओं का परिवर्तन, कोई प्रभाव नहीं</button>
                    <button class="btn operating-btn" result>3-5 दवाओं का परिवर्तन, कोई प्रभाव नहीं</button>
                    <button class="btn operating-btn" result>नियमित रूप से उपचार योजना बदलता हूँ, कोई प्रभाव
                        नहीं</button>
                </div>
            </div>
        </div>

        <!-- ОТВЕТ 1 -->

        <div class="msg-wrapper left-msg" data-result=1>
            <div class="msg">
                <p class="msg-question">
                    क्या आपके पास संबंधित जोड़ों और पीठिका के आनुवांशिक रोग हैं? उदाहरण के लिए, रुमेटॉइड
                    आर्थराइट में, आपके शरीर की सेल्स खुद के जोड़ों को हमला करती हैं। इसके कारण सूजन,
                    दर्द और जोड़ों की आकृति में परिवर्तन होता है। पोदाग्राइटिक आर्थराइट में, अबिमेन के
                    विनिमय की समस्या होती है। पैट्रोलियम अच्छा अवशोषित होता है और मूत्रिक अम्ल के रूप में
                    आपके जोड़ों की ऊपरी तंतुओं में जम जाता है। शायद, आपको स्थायी उपचार की आवश्यकता होती
                    है, हालांकि सकारात्मक प्रभाव मामूली हो सकता है। सामान्य सिफारिशों का पालन सहायक परिणाम
                    प्राप्त करने के लिए पर्याप्त नहीं हो सकता है।
                </p>
                <img class="img-question hidden"
                    src="https://cdnn1.ukraina.ru/img/07e6/0c/02/1041436899_0:206:2905:1840_1920x0_80_0_0_c7022893b761781d76fe592010d14bd2.jpg">
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    मेरे पास रोजाना समय-समय पर इसी प्रकार के लक्षणों वाले रोगियों का इलाज करने के लिए
                    आते हैं। सांख्यिकीय डेटा के अनुसार, प्राकृतिक रूप से उत्पन्न होने वाले जोड़ों और पीठिका
                    के आनुवांशिक रोगों से ग्रस्त लगभग 42 मिलियन लोग हैं। लगभग 17 मिलियन में गंभीर रूप से
                    समस्याएँ होती हैं जो जोड़ों के और पीठिका के रोग के कठिन परिणामों का सामना कर सकती हैं,
                    जो जानलेवा हो सकते हैं।
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg ">
                <p class="msg-question">
                    इस बीमारी को हराने के लिए, आपको आपके इलाज में पौधों के पौधों के संयुक्त उपयोग की
                    आवश्यकता है। कालीमिर्च, लौंग, अदरक और हल्दी के ख्यालों से सूजन और जोड़ों और पीठिका
                    में सूजन को दबाने में मदद मिलती है। इस क्षेत्र में रक्त संचालन बढ़ जाता है, और इस प्रक्रिया
                    के कारण प्रमुख द्रव्यकों को गहरे ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी ऊपरी
                    तंतुओं में अच्छी तरह प्रवेश करता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    प्राकृतिक मछली का कोलेजन और कॉंड्रोइटिन का सल्फेट, समुंदर के जीवों से निकाला गया, जोड़ों और
                    पीठिका के घायल ऊपरी को पूरी तरह से मरम्मत करता है। प्रभावित कोशिकाएँ आवश्यक पोषण सामग्री
                    प्राप्त करती हैं और अपडेट होती हैं। पूरे शरीर को जवान बनाया जाता है, गतिविधियों की पूर्णता और
                    बिना दर्द के लक्षणों का बादशाहत करता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    इस प्रकार के सक्रिय घटक आपको स्थानीय इलाज के लिए एक नई दवा में सामंजस्यपूर्ण रूप से मिलते हैं
                    जिसे
                    <?= $product ?> जेल कहा जाता है। दवा की सूचना में सभी घटकों के आदर्श और संगत
                    घन मात्राएँ होती हैं। इसके निर्माण के लिए नई पौधों की सर्दी निष्कर्षण प्रौद्योगिकी का
                    उपयोग किया जाता है। इसी प्रकार,
                    <?= $product ?> को एलर्जी या संवेदनशील त्वचा वाले लोगों का
                    उपयोग किया जा सकता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    आपके रोग के इलाज के लिए मैं आपको
                    <?= $product ?> जेल को प्रात: काल और शाम को सूजे जाने
                    वाले क्षेत्र पर एक पतली परत के रूप में लगाने की सिफारिश करता हूँ। चिकित्सा की
                    अवधि 30 दिनों तक होती है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p>आप क्या परिणाम उम्मीद कर सकते हैं?</p>
                    <ul>
                        <li>
                            5-7 दिनों के भीतर दर्द और सूजन के सिंड्रोम की कमी;
                        </li>
                        <li>
                            2 हफ्तों के भीतर दर्द के पूरी तरह से खत्म हो जाना;
                        </li>
                        <li>
                            30 दिनों के इलाज के बाद जोड़ों के हड्डों और मांसपेशियों की पुनर्निर्माण।
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    अतिरिक्त सिफारिशें।
                    <?= $product ?> के इलाज को जीवन शैली में सुधार के साथ मेल करना
                    बेहद
                    उपयुक्त हो सकता है। आपको आहार का पालन करना चाहिए, सुरक्षित शारीरिक गतिविधि को
                    जोड़ना चाहिए। यदि आपने कभी भी खेल नहीं खेला है, तो आपको बाहरी हवा में साधारण सैर
                    की
                    शुरुआत करनी चाहिए। समय के साथ धीरे-धीरे भार को बढ़ाएं।
                </p>
            </div>
        </div>

        <div class="msg-wrapper  left-msg">
            <div class="msg">
                <p class="msg-question">
                    मैं इस दवा के निर्माता के साथ सक्रिय रूप से सहयोग कर रहा हूँ, इसलिए कंपनी मेरे
                    रोगियों को
                    <?= $product ?> पर 50% की छूट प्रदान कर रही है। यह प्रस्तावना सटीक 24 घंटे के
                    लिए
                    प्रारूप है।
                    <?= $doc ?> के लिए दवा के लिए बैच की संख्या सीमित है। जल्दी करें! जोड़ों के
                    लिए
                    प्रभावी दवा
                    <?= $product ?> की खरीददारी करने का मौका मिले।
                </p>
            </div>
        </div>

        <!-- Ответ 2 -->
        <div class="msg-wrapper left-msg" data-result=2>
            <div class="msg">
                <p class="msg-question">
                    आपके पास मस्तिष्क-दिनचर यंत्र के चोट के असर हो सकते हैं। ऐसे चोट कभी बिना प्रभाव
                    नहीं
                    जाते, लेकिन सही और समझदार इलाज के साथ दर्द और चोट के परिणामों से छुटकारा पा सकता
                    है।
                    एक बार मस्तिष्क-दिनचर यंत्र को क्षति पहुंचाने पर, शरीर के माध्यमिक बड़े जोड़ों,
                    कूल्हों,
                    और
                    कमर को भार का प्रसारण होता है। स्वस्थ ओरत्रिग की ओर मांसपेशियाँ भी अधिक तनाव
                    में होती
                    हैं,
                    और शरीर में दर्द होता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    मेरे आंकड़ों के अनुसार,
                    <?= $country ?> में 57 मिलियन लोग जोड़ों, हड्डियों और
                    मांसपेशियों के
                    चोट के परिणामों से पीड़ित हैं। इनमें से 8 मिलियन लोग गलत इलाज का शिकार होते हैं,
                    जिसका
                    परिणाम समस्याओं के साथ होता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    इस बीमारी को दूर करने के लिए, आपको पौधों के प्राकृतिक घटकों का मिश्रण उपयोग करना
                    होगा।
                    मिर्च,
                    लौंग, अदरक और हल्दी के अक्षरकों का उपयोग जोड़ों और मांसपेशियों में शांतिपूर्ण
                    प्रक्रिया
                    को
                    दबाने में मदद करता है और बचावता है। इस क्षेत्र में रक्त परिस्थिति बढ़ती है, इस
                    प्रक्रिया के
                    माध्यम से मुख्य क्रियात्मक घटक गहरे ऊतकों में अच्छी तरह प्रवेश करते हैं।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    प्राकृतिक मछली कोलेजन और सुल्फेट ऑफ हॉन्ड्रोयटिन, समुंदरी जीवों से निकाला गया,
                    जोड़ों और
                    मांसपेशियों के घातित ऊतकों को पूरी तरह से पुनर्निर्मित करते हैं। प्रभावित कोशिकाएँ
                    आवश्यक
                    पोषण
                    घटक प्राप्त करती हैं और ताजगी प्राप्त करती हैं, टेंडन, लिगामेंट्स, और मांसपेशियों के
                    टूटे
                    स्थानों
                    पर गड्ढे नहीं बढ़ते हैं। पूरे शरीर को युवावस्था प्राप्त होती है, गति का पूरा
                    मजा
                    आता है और
                    दर्दमुक्ति होती है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    ऐसे सक्रिय घटकों को एक नई स्थानीय उपचार के लिए नए दवाई
                    <?= $product ?> में हमेशा के
                    लिए अनुकूलता
                    से मेलानुसार बनाया गया है। दवा की सूत्र में सभी घटकों की सही और संगत
                    घनत्व होता है।
                    उत्पादन के लिए नई पौधों की ठंडी निष्कर्षण प्रौद्योगिकी का उपयोग किया जाता है।
                    यही कारण है कि
                    <?= $product ?> को एलर्जी या संवेदनशील त्वचा वाले लोगों को उपयोग
                    करने में
                    सक्षम
                    बनाता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आपके रोग के उपचार के लिए मैं आपको सुझाव देता हूँ कि आप सुबह और शाम को जल्दी और पतली परत में
                    <?= $product ?> जेल को दुखाई गई सूजन क्षेत्र पर लगाएं। थेरेपी का कोर्स 30 दिन का है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p> आप क्या परिणाम उम्मीद कर सकते हैं?</p>
                    <ul>
                        <li>
                            पहले 5-7 दिनों के भीतर दर्द और सूजन के लक्षण कम हो सकते हैं;
                        </li>
                        <li>
                            2 हफ्तों के बीतने के बाद दर्द का पूरी तरह से समापन हो सकता है;
                        </li>
                        <li>
                            30 दिनों के इलाज के बाद जोड़ों के हड्डों और सूजन के उपादानों की पुनर्निर्माण हो सकती
                            है।
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    अतिरिक्त सुझाव। आपको
                    <?= $product ?> के इलाज को जीवनशैली में सुधार के साथ मिलाना चाहिए।
                    आहार का पालन करें, सुरक्षित शारीरिक गतिविधि को शामिल करें। यदि आप कभी भी खेल नहीं खेले हैं, तो
                    बाहर
                    की ताजगी में साधारण पैदल चलना शुरू करें। समय के साथ आप बढ़ती ज़िंदगी की ज़रुरतों को धीरे-धीरे
                    पूरा करें।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    मैं इस दवा के निर्माता के साथ सक्रिय रूप से सहयोग करता हूँ, इसलिए कंपनी मेरे रोगियों को
                    <?= $product ?>
                    पर
                    50% छूट प्रदान करती है। यह ऑफर सटीक 24 घंटे के लिए है।
                    <?= $doc ?> के लिए दवा के बैच की मात्रा
                    सीमित है। जल्दी करें! सूजन के लिए प्रभावी दवा
                    <?= $product ?> का ऑर्डर करने का मौका मिलेगा।
                </p>
            </div>
        </div>

        <!-- Ответ 3 -->
        <div class="msg-wrapper left-msg" data-result=3>
            <div class="msg">
                <p class="msg-question">
                    आपकी संभावना है कि आपके पास बड़े जोड़ों के आर्थराइटिस हैं। बढ़ते आयु के साथ, हड्डियों की
                    संयुक्त सतहें अधिक लोड के कारण खराब होने लगती हैं। अधिशेष वजन, अत्यधिक शारीरिक प्रयास, और पूर्व
                    की चोटें केवल प्रक्रिया को और बिगड़ती हैं। इस तरह के संयुक्त सतहों के परिवर्तनों का इलाज समग्र
                    दृष्टिकोण से किया जाना चाहिए।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    लगभग 40 मिलियन लोग
                    <?= $country ?> में जोड़ों और कमर की उम्र के परिवर्तनों से पीड़ित हैं। उनमें से
                    करीब 50% रोज़ाना के दर्द और उपचार की असफलता की बात करते हैं।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    रोग को हराने के लिए, आपको उपचार में पौधों के प्राकृतिक संघटकों का संयोजन उपयोग करने की
                    आवश्यकता है। मिर्च, लौंग, अदरक, और हल्दी के अर्क से जोड़ों और कमर में गड़बड़ी की प्रक्रिया को
                    दबाने में मदद मिलती है। इस क्षेत्र में रक्त संचालन में वृद्धि होती है, जिससे इस प्रक्रिया के
                    माध्यम से मुख्य संघटक गहरी ऊतकों में अच्छी तरह प्रवेश करते हैं।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    प्राकृतिक मछली कोलेजन और सल्फेट ऑफ हॉन्ड्रोइटिन, समुंदरी जीवों से प्राप्त किया जाने वाला, जोड़ों और
                    कमर की क्षतिग्रस्त ऊतकों को पूरी तरह से मरम्मत करता है। प्रभावित कोशिकाएँ आवश्यक पोषण घटक प्राप्त
                    करती हैं और नवीनतम हो जाती हैं, टेंडन, लिगामेंट्स, और मांसपेशियों के टूटे स्थानों पर कठिन ताक़तों के
                    बिना भर जाते हैं। जोड़ों में हड्डियों की सतहें कोलेजन और हॉन्ड्रोइटिन के मोलेक्यूल से भर जाती हैं,
                    हड्डी की ऊतक पुनर्निर्मित होती है। पूरे शरीर को युवावस्था मिलती है, पूर्णता और दर्दमुक्ति की गतियों
                    का
                    पुनर्प्राप्त होता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    ऐसे सक्रिय घटकों को एक नई स्थानिक उपचार दवा
                    <?= $product ?> में मेलानुसार सुसज्जित किया गया है।
                    दवा की सूत्र में सभी घटकों की सही और संगत घनत्व होता है। उत्पादन के लिए नई संयुक्त सत्वों की ठंडी
                    निकासी प्रौद्योगिकी का उपयोग किया जाता है। इसलिए
                    <?= $product ?> को एलर्जी या संवेदनशील त्वचा वाले लोगों
                    के लिए उपयोग किया जा सकता है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    आपके रोग का इलाज करने के लिए मैं आपको सुझाव देता हूँ कि आप सुबह और शाम को प्रदारित दर्द क्षेत्र पर
                    एक पतली परत के साथ
                    <?= $product ?> जेल लगाएं। इस चिकित्सा कोर्स का अवधि 30 दिन होती है।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <div class="msg-question">
                    <p>आप किन परिणामों की उम्मीद कर सकते हैं?</p>
                    <ul>
                        <li>
                            प्रथम 5-7 दिनों में दर्द और सूजन के सिंड्रोम की कमी;
                        </li>
                        <li>
                            चिकित्सा के पहले 2 हफ्तों में पूरी तरह से दर्द का खात्मा;
                        </li>
                        <li>
                            30 दिनों के इलाज के बाद जोड़ों के हड्डों और मांसपेशियों के संरचन की पुनर्निर्माण।
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    अतिरिक्त सुझाव। आपके इलाज को
                    <?= $product ?> के साथ अपने जीवनशैली में सुधार के साथ मेल करने का प्रयास करें। आहार का पालन करें,
                    सुरक्षित शारीरिक गतिविधि को शामिल करें। अगर आपने कभी भी खेल नहीं खेला है, तो ताजे हवा में छोटे से
                    सुरुआत करें। समय के साथ, आप धीरे-धीरे बढ़ाते हुए बोझ बढ़ा सकते हैं।
                </p>
            </div>
        </div>
        <div class="msg-wrapper left-msg">
            <div class="msg">
                <p class="msg-question">
                    मैं दवा के निर्माता के साथ सक्रिय रूप से सहयोग करता हूँ, इसलिए कंपनी मेरे मरीजों को
                    <?= $product ?> पर 50% छूट प्रदान करती है। यह प्रस्ताव बिल्कुल 24 घंटे के लिए मान्य है। मरीजों के
                    लिए दवा की खण्ड की संख्या
                    <?= $doc ?> सीमित है। जल्दी करें!
                    <?= $product ?> जोड़ों के लिए प्रभावी दवा की आर्डर करने का अवसर न छूकें।
                </p>
            </div>
        </div>
    </div>
</div>