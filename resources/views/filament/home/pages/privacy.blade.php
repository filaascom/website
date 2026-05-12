<x-marketing.legal-page
    eyebrow="/ legal"
    heading="Privacy Policy"
    lede="How AIR LABS collects, uses, and protects your personal data when you use FilaaS, in compliance with the EU General Data Protection Regulation (GDPR)."
    updated-at="{{ now()->format('F j, Y') }}"
>
    <h2>1. Data controller</h2>
    <p>The controller of your personal data is <strong>AIR LABS Krzysztof Bączkiewicz</strong>, NIP 7842446875, a sole proprietorship registered in Poland ("AIR LABS", "we", "us"), operator of FilaaS at filaas.com.</p>
    <p>For any privacy-related matter — including exercising your rights under the GDPR — contact us at <a href="mailto:contact@filaas.com">contact@filaas.com</a>.</p>

    <h2>2. Scope</h2>
    <p>This Privacy Policy applies to personal data we process when you visit filaas.com, create an account, purchase a subscription, or otherwise interact with the FilaaS service (the "Service"). It does not apply to applications you build on top of FilaaS — for those, you are the controller and your own privacy notice applies to your end users.</p>

    <h2>3. What data we collect</h2>
    <p><strong>Account data.</strong> Email address, name, hashed password, profile avatar (if you upload one), and any team data you create (team name, logo, members, invitations, roles).</p>
    <p><strong>Billing data.</strong> When you subscribe to a paid plan, payments are handled by Stripe, which acts as <strong>merchant of record</strong>. Stripe collects your full payment information directly — we never see or store your card number, CVC, or bank details. From Stripe we receive a customer identifier, the subscription status, plan tier, billing interval, last four digits of the card, country, and invoice metadata, which we store to operate the Service.</p>
    <p><strong>Technical data.</strong> IP address, browser type and version, device type, operating system, language, referring URL, pages visited, and timestamps. This data is collected automatically through server logs and is used for security, troubleshooting, and abuse prevention.</p>
    <p><strong>Communication data.</strong> Content of messages you send to <a href="mailto:contact@filaas.com">contact@filaas.com</a> or through the Service, including support requests.</p>
    <p><strong>Push notification data.</strong> If you opt in to web push notifications, your browser-issued push subscription endpoint and VAPID keys, which let us deliver in-app notifications to your device.</p>
    <p>We do <strong>not</strong> intentionally collect any special categories of personal data (health, ethnicity, political views, etc.) and ask you not to submit them through the Service.</p>

    <h2>4. Legal basis for processing</h2>
    <p>We process your personal data under Article 6(1) GDPR on the following bases:</p>
    <p><strong>(b) Performance of a contract</strong> — to create and operate your account, deliver the Service, run subscriptions, process invoices, provide support, and enforce these Terms.</p>
    <p><strong>(c) Legal obligation</strong> — to retain tax, accounting, and billing records as required by Polish and EU law.</p>
    <p><strong>(f) Legitimate interest</strong> — to keep the Service secure, prevent fraud and abuse, monitor server health, analyze aggregated usage to improve the Service, and defend legal claims. We balance these interests against your rights and freedoms.</p>
    <p><strong>(a) Consent</strong> — where consent is required, for example before sending optional marketing emails or activating web push notifications. You can withdraw consent at any time without affecting the lawfulness of processing carried out before the withdrawal.</p>

    <h2>5. How we use your data</h2>
    <p>We use the data described above to: (a) provide, maintain, and improve the Service; (b) create and manage your account and teams; (c) process payments through Stripe and manage your subscription; (d) send transactional emails (account verification, password reset, team invitations, billing notices, security alerts); (e) respond to support requests; (f) detect, investigate, and prevent fraud, abuse, and security incidents; (g) comply with our legal, tax, and accounting obligations; (h) enforce these Terms and exercise or defend legal claims.</p>

    <h2>6. Sharing your data</h2>
    <p>We do <strong>not</strong> sell your personal data. We share it only with the following categories of recipients, on a need-to-know basis and under appropriate contractual safeguards (including GDPR Article 28 data processing agreements where applicable):</p>
    <p><strong>Stripe, Inc.</strong> — payment processor and merchant of record for paid subscriptions. Stripe processes your billing data under its own privacy policy at <a href="https://stripe.com/privacy" target="_blank" rel="noopener">stripe.com/privacy</a>.</p>
    <p><strong>Hosting and infrastructure providers</strong> — cloud providers that host the Service and its databases, content delivery networks, error and uptime monitoring, and email delivery services. These providers act as our processors and may only handle data on our documented instructions.</p>
    <p><strong>Push notification gateways</strong> — the push services operated by your browser vendor (e.g. Google, Mozilla, Apple) that route web push messages to your device, if you opt in.</p>
    <p><strong>Legal recipients</strong> — courts, tax authorities, law enforcement, and other public bodies where we are legally required to disclose data, and our professional advisors (lawyers, accountants) where strictly necessary.</p>
    <p><strong>Successor in business</strong> — in connection with a merger, acquisition, asset sale, or reorganization, your data may be transferred subject to the receiving party honoring this Privacy Policy.</p>

    <h2>7. International transfers</h2>
    <p>Some of our processors (notably Stripe, hosting providers, and email senders) are based in or transfer data to countries outside the European Economic Area, including the United States. Where this happens, we rely on adequacy decisions of the European Commission and, where none exists, on the Standard Contractual Clauses adopted by the European Commission, together with appropriate supplementary measures. You can request a copy of the safeguards in place by writing to <a href="mailto:contact@filaas.com">contact@filaas.com</a>.</p>

    <h2>8. How long we keep your data</h2>
    <p><strong>Account data.</strong> For as long as your account is active. When you request deletion, your account enters a 30-day grace period during which it can be restored; after the grace period, the account and the personal data associated with it are permanently removed by the scheduled <code>users:prune</code> job.</p>
    <p><strong>Billing and tax records.</strong> Invoices, receipts, and related records are retained for the period required by Polish and EU tax law (currently up to five years from the end of the tax year in which the transaction occurred), even after account deletion.</p>
    <p><strong>Server logs and security data.</strong> Up to twelve (12) months, then deleted or anonymized.</p>
    <p><strong>Support correspondence.</strong> Up to three (3) years after the case is closed, for the purpose of defending legal claims.</p>
    <p><strong>Backups.</strong> Encrypted backups are rotated and overwritten on a rolling basis; data deleted from production may persist in backups for up to 30 days before being purged.</p>

    <h2>9. Your rights under the GDPR</h2>
    <p>If you are in the European Economic Area, the United Kingdom, or another jurisdiction with similar law, you have the following rights:</p>
    <p><strong>Access (Art. 15)</strong> — obtain confirmation that we process your data and receive a copy of it.</p>
    <p><strong>Rectification (Art. 16)</strong> — correct inaccurate or incomplete data. Most account and team data can be edited directly from your account settings.</p>
    <p><strong>Erasure (Art. 17)</strong> — request deletion of your personal data, subject to our retention obligations. You can initiate self-service deletion from your account settings.</p>
    <p><strong>Restriction (Art. 18)</strong> — ask us to limit the processing of your data in certain circumstances.</p>
    <p><strong>Portability (Art. 20)</strong> — receive your data in a structured, commonly used, machine-readable format and have it transmitted to another controller where technically feasible.</p>
    <p><strong>Objection (Art. 21)</strong> — object to processing based on our legitimate interests, including profiling.</p>
    <p><strong>Withdraw consent</strong> — where processing is based on consent, withdraw it at any time without affecting the lawfulness of prior processing.</p>
    <p><strong>Lodge a complaint</strong> — with a supervisory authority. The competent authority in Poland is the President of the Personal Data Protection Office (Prezes UODO), ul. Stawki 2, 00-193 Warsaw, <a href="https://uodo.gov.pl" target="_blank" rel="noopener">uodo.gov.pl</a>. You may also complain to the supervisory authority of the EU member state where you live or work.</p>
    <p>To exercise any of these rights, contact us at <a href="mailto:contact@filaas.com">contact@filaas.com</a>. We respond within one month of receiving a valid request, extendable by up to two further months for complex requests. We may need to verify your identity before acting.</p>

    <h2>10. Automated decision-making</h2>
    <p>We do not use solely automated decision-making, including profiling, that produces legal or similarly significant effects on you.</p>

    <h2>11. Cookies and similar technologies</h2>
    <p>The Service uses a small number of strictly necessary cookies for authentication, session management, and security (CSRF protection). These cookies do not require consent under the ePrivacy Directive because they are essential to deliver the Service you requested.</p>
    <p>We do not use third-party advertising or cross-site tracking cookies. If we add optional analytics or marketing cookies in the future, we will request your prior consent through an in-app banner.</p>

    <h2>12. Security</h2>
    <p>We implement appropriate technical and organizational measures to protect your data against unauthorized access, alteration, disclosure, or destruction. These include encrypted transport (TLS), password hashing using industry-standard algorithms, role-based access control, audit logging, network isolation, regular security updates, and access reviews. No method of transmission or storage is fully secure; in the event of a personal data breach that is likely to result in a risk to your rights and freedoms, we will notify the supervisory authority within 72 hours and, where required, inform you without undue delay.</p>

    <h2>13. Children</h2>
    <p>The Service is not directed at children under 16. We do not knowingly collect data from children. If you believe a child has provided personal data to us, contact <a href="mailto:contact@filaas.com">contact@filaas.com</a> and we will delete it.</p>

    <h2>14. Changes to this Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time to reflect changes in our practices, in the Service, or in the law. Material changes will be communicated by email to the address associated with your account and through the application at least fifteen (15) days before they take effect. The "last updated" date at the top of this page always reflects the current version.</p>

    <h2>15. Contact</h2>
    <p>For any privacy-related question, request, or concern, write to <a href="mailto:contact@filaas.com">contact@filaas.com</a> or by post to AIR LABS Krzysztof Bączkiewicz, NIP 7842446875, Poland.</p>
</x-marketing.legal-page>
