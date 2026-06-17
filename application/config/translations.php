<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['translations'] = [

    'en' => [
        // Meta
        'page_title'              => 'Rafael Almeida — Portfolio',

        // Header
        'header_subtitle'         => "I'm a <span>Software Engineer</span> based in Brazil",

        // Navbar
        'nav_home'                => 'Home',
        'nav_about'               => 'About',
        'nav_resume'              => 'Resume',
        'nav_services'            => 'Services',
        'nav_contact'             => 'Contact',

        // About section
        'about_title'             => 'About',
        'about_subtitle'          => 'Learn more about me',
        'about_role'              => 'Backend Software Engineer',
        'about_intro'             => 'Backend Software Engineer with 5+ years of experience.',
        'about_education_label'   => 'Education',
        'about_education_value'   => "Bachelor's in Engineering",
        'about_city_label'        => 'City',
        'about_city_value'        => 'Tatuí, SP, Brazil',
        'about_email_label'       => 'Email',
        'about_freelance_label'   => 'Freelance',
        'about_freelance_value'   => 'Available',
        'about_bio'               => "Backend Software Engineer with 5+ years of experience building backend systems, RESTful APIs, and scalable applications using PHP (Laravel and Symfony) in cloud-based environments (AWS). Currently working as Full Stack Software Engineer at Grupo One7, focused on high-traffic systems and financial platform integrations.",

        // Counts
        'counts_experience'       => 'Years of experience',
        'counts_projects'         => 'Projects',
        'counts_hours'            => 'Development hours',
        'counts_ongoing'          => 'Ongoing projects',

        // Skills
        'skills_title'            => 'Skills',

        // Interests
        'interests_title'         => 'Interests',
        'interest_backend'        => 'Backend Dev',
        'interest_cloud'          => 'Cloud / AWS',
        'interest_data'           => 'Data Science',
        'interest_domotics'       => 'Home Automation',
        'interest_esp32'          => 'ESP32 / IoT',
        'interest_microservices'  => 'Microservices',
        'interest_devops'         => 'DevOps',
        'interest_ai'             => 'Artificial Intelligence',

        // Resume section
        'resume_title'            => 'Resume',
        'resume_subtitle'         => 'Background',
        'resume_edu_title'        => 'Education',
        'resume_acad_title'       => 'Academic Experience',
        'resume_pro_title'        => 'Professional Experience',

        // Education
        'edu_degree'              => 'Bachelor in Control and Automation Engineering',
        'edu_years'               => '2019 - 2024',
        'edu_institution'         => 'Centro Federal de Educação Tecnológica de Minas Gerais',
        'edu_desc'                => 'Degree in Engineering focused on automation, control systems, and software development. Strengthens analytical thinking and the ability to design reliable, well-structured solutions.',

        // Academic experience
        'acad_title'              => 'Scientific Researcher',
        'acad_years'              => 'Aug 2019 - Jul 2020',
        'acad_institution'        => 'CEFET-MG — Leopoldina, MG',
        'acad_desc'               => 'Development of a temperature and humidity monitoring system for dairy production sheds using the ESP-WROOM32 microcontroller integrated with a mobile application. Implementation using C and high-level programming languages to evaluate climatic interference in dairy production.',

        // Experience 1
        'exp1_title'              => 'Full Stack Software Engineer',
        'exp1_company'            => 'Grupo One7',
        'exp1_years'              => 'Aug 2024 - Present',
        'exp1_location'           => 'Tatuí, SP, Brazil',
        'exp1_item1'              => 'Development and maintenance of critical backend systems ensuring stability, scalability, and continuous evolution.',
        'exp1_item2'              => 'Design and implementation of REST APIs and backend services using PHP (Laravel 5 & 8).',
        'exp1_item3'              => 'Integration with national credit bureaus (Serasa Experian, Vadu, and others), handling sensitive data and automated decision flows.',
        'exp1_item4'              => 'Deployment and operation on AWS (ECS, S3) using Docker and Redis.',
        'exp1_item5'              => 'Active participation in Agile/Scrum ceremonies.',

        // Experience 2
        'exp2_title'              => 'Backend Software Engineer (PHP)',
        'exp2_company'            => 'SevenSys Soluções em TI',
        'exp2_years'              => 'Sep 2023 - Feb 2024',
        'exp2_location'           => 'Blumenau, SC, Brazil',
        'exp2_item1'              => 'Development and maintenance of backend systems and APIs for the education sector.',
        'exp2_item2'              => 'Use of PHP (Symfony), Oracle (PL/SQL), and Docker in production environments.',
        'exp2_item3'              => 'Bug fixing and system improvements to ensure stability and reliability.',
        'exp2_item4'              => 'Active participation in code reviews and pull requests following best practices.',

        // Experience 3
        'exp3_title'              => 'Backend Software Engineer',
        'exp3_company'            => 'Dimensa Tecnologia',
        'exp3_years'              => 'Jun 2021 - Sep 2023',
        'exp3_location'           => 'Leopoldina, MG, Brazil',
        'exp3_item1'              => 'Development of backend systems for the financial sector (credit companies and securitization platforms).',
        'exp3_item2'              => 'Design, development, and optimization of high-traffic REST APIs.',
        'exp3_item3'              => 'Integration between internal systems and external partners.',
        'exp3_item4'              => 'Participation in code reviews and testing, ensuring performance and code quality.',

        // Experience 4
        'exp4_title'              => 'Web Development Intern',
        'exp4_company'            => 'Dimensa Tecnologia',
        'exp4_years'              => 'Nov 2020 - May 2021',
        'exp4_location'           => 'Leopoldina, MG, Brazil',
        'exp4_item1'              => 'Development and refactoring of web and backend applications.',
        'exp4_item2'              => 'Creation of reporting routines and data processing features.',
        'exp4_item3'              => 'Bug fixing and system stabilization.',

        // Services
        'services_title'          => 'Services',
        'services_subtitle'       => 'What I Do',
        'svc1_title'              => 'Full Stack Development',
        'svc1_desc'               => 'End-to-end development of web applications, from REST APIs and backend systems with PHP (Laravel, Symfony) to frontend interfaces with React.js. Experienced with mission-critical applications in the financial sector, handling high-traffic loads and complex business rules.',
        'svc2_title'              => 'Cloud Infrastructure & DevOps',
        'svc2_desc'               => 'Deployment and operation of containerized applications on AWS (ECS, S3) using Docker and Redis. Setup of staging, testing, and production environments focused on reliability and scalability.',
        'svc3_title'              => 'System Integration',
        'svc3_desc'               => 'Integration between internal systems and external partners via REST APIs. Experience connecting to credit bureaus (Serasa Experian, Vadu), payment platforms, and third-party services with automated decision flows.',
        'svc4_title'              => 'Embedded Systems',
        'svc4_desc'               => 'Personal expertise in embedded systems and IoT using ESP32 and Arduino. Development of monitoring solutions and hardware prototypes, including academic research in agricultural sensor systems.',
        'svc5_title'              => 'Database Management',
        'svc5_desc'               => 'Modeling, querying, and optimizing relational and NoSQL databases. Experienced with MySQL, MongoDB, and Oracle (PL/SQL) in high-traffic production environments, including data processing pipelines and reporting routines.',
        'svc6_title'              => 'Backend Architecture & Consulting',
        'svc6_desc'               => 'Architecture review and design of scalable backend systems. Guidance on microservices structure, REST API best practices, code quality, and Agile processes — from planning to code review.',

        // Contact
        'contact_title'           => 'Contact',
        'contact_subtitle'        => 'Get in Touch',
        'contact_address_title'   => 'Address',
        'contact_address_value'   => 'Tatuí, SP, Brazil',
        'contact_social_title'    => 'Social Profiles',
        'contact_email_title'     => 'Email',
        'contact_phone_title'     => 'Phone',
        'contact_phone_value'     => 'Not available at the moment',
        'contact_name_ph'         => 'Name',
        'contact_email_ph'        => 'Email',
        'contact_subject_ph'      => 'Subject',
        'contact_message_ph'      => 'Message',
        'contact_loading'         => 'Loading',
        'contact_sent'            => 'Your message has been sent. Thank you!',
        'contact_send_btn'        => 'Send Message',

        // Footer
        'footer_credit'           => 'Made by',
    ],

    'pt' => [
        // Meta
        'page_title'              => 'Rafael Almeida — Portfólio',

        // Header
        'header_subtitle'         => "Sou um <span>Engenheiro de Software</span> do Brasil",

        // Navbar
        'nav_home'                => 'Home',
        'nav_about'               => 'Sobre',
        'nav_resume'              => 'Resumo',
        'nav_services'            => 'Serviços',
        'nav_contact'             => 'Contato',

        // About section
        'about_title'             => 'Sobre',
        'about_subtitle'          => 'Saiba mais sobre mim',
        'about_role'              => 'Engenheiro de Software Backend',
        'about_intro'             => 'Engenheiro de Software Backend com mais de 5 anos de experiência.',
        'about_education_label'   => 'Escolaridade',
        'about_education_value'   => 'Graduação em Engenharia',
        'about_city_label'        => 'Cidade',
        'about_city_value'        => 'Tatuí, SP, Brasil',
        'about_email_label'       => 'Email',
        'about_freelance_label'   => 'Freelance',
        'about_freelance_value'   => 'Disponível',
        'about_bio'               => "Engenheiro de Software Backend com mais de 5 anos de experiência no desenvolvimento de sistemas backend, APIs RESTful e aplicações escaláveis com PHP (Laravel e Symfony) em ambientes de nuvem (AWS). Atualmente atuando como Engenheiro de Software Full Stack no Grupo One7, com foco em sistemas de alto tráfego e integrações de plataformas financeiras.",

        // Counts
        'counts_experience'       => 'Anos de experiência',
        'counts_projects'         => 'Projetos',
        'counts_hours'            => 'Horas de desenvolvimento',
        'counts_ongoing'          => 'Projetos em andamento',

        // Skills
        'skills_title'            => 'Habilidades',

        // Interests
        'interests_title'         => 'Interesses',
        'interest_backend'        => 'Desenvolvimento Backend',
        'interest_cloud'          => 'Cloud / AWS',
        'interest_data'           => 'Ciência de Dados',
        'interest_domotics'       => 'Domótica',
        'interest_esp32'          => 'ESP32 / IoT',
        'interest_microservices'  => 'Microsserviços',
        'interest_devops'         => 'DevOps',
        'interest_ai'             => 'Inteligência Artificial',

        // Resume section
        'resume_title'            => 'Resumo',
        'resume_subtitle'         => 'Formação',
        'resume_edu_title'        => 'Educação',
        'resume_acad_title'       => 'Experiência Acadêmica',
        'resume_pro_title'        => 'Experiência Profissional',

        // Education
        'edu_degree'              => 'Bacharelado em Engenharia de Controle e Automação',
        'edu_years'               => '2019 - 2024',
        'edu_institution'         => 'Centro Federal de Educação Tecnológica de Minas Gerais',
        'edu_desc'                => 'Graduação em Engenharia com foco em automação, sistemas de controle e desenvolvimento de software. Fortalece o pensamento analítico e a capacidade de projetar soluções confiáveis e bem estruturadas.',

        // Academic experience
        'acad_title'              => 'Iniciação Científica e Tecnológica',
        'acad_years'              => 'Ago 2019 - Jul 2020',
        'acad_institution'        => 'CEFET-MG — Leopoldina, MG',
        'acad_desc'               => 'Desenvolvimento de um sistema de monitoramento de temperatura e umidade para galpões de produção leiteira utilizando o microcontrolador ESP-WROOM32 integrado a um aplicativo mobile. Implementação em C e outras linguagens para avaliar a interferência climática na produção leiteira.',

        // Experience 1
        'exp1_title'              => 'Engenheiro de Software Full Stack',
        'exp1_company'            => 'Grupo One7',
        'exp1_years'              => 'Ago 2024 - Presente',
        'exp1_location'           => 'Tatuí, SP, Brasil',
        'exp1_item1'              => 'Desenvolvimento e manutenção de sistemas backend críticos, garantindo estabilidade, escalabilidade e evolução contínua.',
        'exp1_item2'              => 'Design e implementação de APIs REST e serviços backend com PHP (Laravel 5 & 8).',
        'exp1_item3'              => 'Integração com bureaus de crédito nacionais (Serasa Experian, Vadu e outros), tratando dados sensíveis e fluxos de decisão automatizados.',
        'exp1_item4'              => 'Deploy e operação de aplicações na AWS (ECS, S3) com Docker e Redis.',
        'exp1_item5'              => 'Participação ativa nas cerimônias Agile/Scrum.',

        // Experience 2
        'exp2_title'              => 'Engenheiro de Software Backend (PHP)',
        'exp2_company'            => 'SevenSys Soluções em TI',
        'exp2_years'              => 'Set 2023 - Fev 2024',
        'exp2_location'           => 'Blumenau, SC, Brasil',
        'exp2_item1'              => 'Desenvolvimento e manutenção de sistemas backend e APIs para o setor educacional.',
        'exp2_item2'              => 'Uso de PHP (Symfony), Oracle (PL/SQL) e Docker em ambientes de produção.',
        'exp2_item3'              => 'Correção de bugs e melhorias de sistema para garantir estabilidade e confiabilidade.',
        'exp2_item4'              => 'Participação ativa em code reviews e pull requests seguindo boas práticas.',

        // Experience 3
        'exp3_title'              => 'Engenheiro de Software Backend',
        'exp3_company'            => 'Dimensa Tecnologia',
        'exp3_years'              => 'Jun 2021 - Set 2023',
        'exp3_location'           => 'Leopoldina, MG, Brasil',
        'exp3_item1'              => 'Desenvolvimento de sistemas backend para o setor financeiro (empresas de crédito e plataformas de securitização).',
        'exp3_item2'              => 'Design, desenvolvimento e otimização de APIs REST de alto tráfego.',
        'exp3_item3'              => 'Integração entre sistemas internos e parceiros externos.',
        'exp3_item4'              => 'Participação em code reviews e testes, garantindo performance e qualidade de código.',

        // Experience 4
        'exp4_title'              => 'Estagiário em Desenvolvimento Web',
        'exp4_company'            => 'Dimensa Tecnologia',
        'exp4_years'              => 'Nov 2020 - Mai 2021',
        'exp4_location'           => 'Leopoldina, MG, Brasil',
        'exp4_item1'              => 'Desenvolvimento e refatoração de aplicações web e backend.',
        'exp4_item2'              => 'Criação de rotinas de relatórios e funcionalidades de processamento de dados.',
        'exp4_item3'              => 'Correção de bugs e estabilização de sistemas.',

        // Services
        'services_title'          => 'Serviços',
        'services_subtitle'       => 'Meus Serviços',
        'svc1_title'              => 'Desenvolvimento Full Stack',
        'svc1_desc'               => 'Desenvolvimento ponta a ponta de aplicações web, de APIs REST e sistemas backend com PHP (Laravel, Symfony) até interfaces frontend com React.js. Experiência em aplicações críticas no setor financeiro, com alto volume de requisições e regras de negócio complexas.',
        'svc2_title'              => 'Cloud & DevOps',
        'svc2_desc'               => 'Deploy e operação de aplicações containerizadas na AWS (ECS, S3) com Docker e Redis. Configuração de ambientes de staging, teste e produção com foco em confiabilidade e escalabilidade.',
        'svc3_title'              => 'Integração de Sistemas',
        'svc3_desc'               => 'Integração entre sistemas internos e parceiros externos via APIs REST. Experiência com bureaus de crédito (Serasa Experian, Vadu), plataformas de pagamento e serviços de terceiros com fluxos de decisão automatizados.',
        'svc4_title'              => 'Sistemas Embarcados',
        'svc4_desc'               => 'Conhecimento pessoal em sistemas embarcados e IoT com ESP32 e Arduino. Desenvolvimento de soluções de monitoramento e prototipagem de hardware, incluindo pesquisa acadêmica com sensores aplicados à produção agropecuária.',
        'svc5_title'              => 'Banco de Dados',
        'svc5_desc'               => 'Modelagem, consulta e otimização de bancos de dados relacionais e NoSQL. Experiência com MySQL, MongoDB e Oracle (PL/SQL) em ambientes de produção de alto tráfego, incluindo pipelines de processamento de dados e rotinas de relatórios.',
        'svc6_title'              => 'Arquitetura & Consultoria Backend',
        'svc6_desc'               => 'Revisão e design de arquitetura para sistemas backend escaláveis. Orientação em estrutura de microsserviços, boas práticas de APIs REST, qualidade de código e processos Ágeis — do planejamento ao code review.',

        // Contact
        'contact_title'           => 'Contato',
        'contact_subtitle'        => 'Entre em Contato',
        'contact_address_title'   => 'Endereço',
        'contact_address_value'   => 'Tatuí, SP, Brasil',
        'contact_social_title'    => 'Redes Sociais',
        'contact_email_title'     => 'Email',
        'contact_phone_title'     => 'Telefone',
        'contact_phone_value'     => 'Indisponível no momento',
        'contact_name_ph'         => 'Nome',
        'contact_email_ph'        => 'Email',
        'contact_subject_ph'      => 'Assunto',
        'contact_message_ph'      => 'Mensagem',
        'contact_loading'         => 'Carregando',
        'contact_sent'            => 'Sua mensagem foi enviada. Obrigado!',
        'contact_send_btn'        => 'Enviar Mensagem',

        // Footer
        'footer_credit'           => 'Feito por',
    ],
];
