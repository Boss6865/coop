PGDMP      1                }            MEGCOOP    17.4    17.4    m           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            n           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            o           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            p           1262    16389    MEGCOOP    DATABASE     o   CREATE DATABASE "MEGCOOP" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en-US';
    DROP DATABASE "MEGCOOP";
                     postgres    false            �            1259    16524    _member_of_society    TABLE     `  CREATE TABLE public._member_of_society (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "ST_Male" integer,
    "ST_Female" integer,
    "ST_CoopSociety" integer,
    "ST_PG" integer,
    "ST_SHG" integer,
    "SC_Male" integer,
    "SC_Female" integer,
    "SC_CoopSociety" integer,
    "SC_PG" integer,
    "SC_SHG" integer,
    "Gen_Male" integer,
    "Gen_Female" integer,
    "Gen_CoopSociety" integer,
    "Gen_PG" integer,
    "Gen_SHG" integer,
    "Managing_Male" integer NOT NULL,
    "Managing_Female" integer NOT NULL,
    "Date_of_LastAGM" character varying(50) NOT NULL,
    "Employee_Male" integer NOT NULL,
    "Employee_Female" integer NOT NULL,
    "Trained_Male" integer NOT NULL,
    "Trained_Female" integer NOT NULL,
    "Programme_Type" character varying(255) NOT NULL,
    "Training_Program" character varying(255) NOT NULL,
    "Number_of_Trainee" integer NOT NULL,
    "Managemnt_Salary" bigint NOT NULL,
    "Management_Expense" bigint NOT NULL,
    "Other_Expense" bigint NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 &   DROP TABLE public._member_of_society;
       public         heap r    	   MainAdmin    false            �            1259    16523    _member_of_society_id_seq    SEQUENCE     �   CREATE SEQUENCE public._member_of_society_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public._member_of_society_id_seq;
       public            	   MainAdmin    false    233            q           0    0    _member_of_society_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public._member_of_society_id_seq OWNED BY public._member_of_society.id;
          public            	   MainAdmin    false    232            �            1259    16489    _societydata    TABLE     �  CREATE TABLE public._societydata (
    id bigint NOT NULL,
    "Name_of_the_Society" text NOT NULL,
    "Registration_No" character varying(255) NOT NULL,
    "Date_of_registration" character varying(255) NOT NULL,
    "Sector_Type" character varying(255) NOT NULL,
    "Email" text NOT NULL,
    "Pan_of_Society" character varying(255) NOT NULL,
    "Location_Area" character varying(255) NOT NULL,
    "District" character varying(255) NOT NULL,
    "Block" text NOT NULL,
    "Board" character varying(255) NOT NULL,
    "Circle" character varying(255) NOT NULL,
    "Village" character varying(255) NOT NULL,
    "Post_office" character varying(255) NOT NULL,
    "Police_Station" character varying(255) NOT NULL,
    "Pincode" character varying(255) NOT NULL,
    "Operation_District" character varying(255) NOT NULL,
    "Operation_villages" text NOT NULL,
    "Affiliation" character varying(255) NOT NULL,
    "Status" character varying(255) NOT NULL,
    "Years_of_Non_function" character varying(255),
    "Section_Conducted" character varying(255),
    "Section_Cancellation" character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public._societydata;
       public         heap r    	   MainAdmin    false            �            1259    16488    _societydata_id_seq    SEQUENCE     |   CREATE SEQUENCE public._societydata_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public._societydata_id_seq;
       public            	   MainAdmin    false    231            r           0    0    _societydata_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public._societydata_id_seq OWNED BY public._societydata.id;
          public            	   MainAdmin    false    230                       1259    25624 
   activities    TABLE     �  CREATE TABLE public.activities (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    activity_1 character varying(255),
    activity_2 character varying(255),
    activity_3 character varying(255),
    activity_4 character varying(255),
    activity_5 character varying(255),
    activity_other character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.activities;
       public         heap r    	   MainAdmin    false                       1259    25623    activities_id_seq    SEQUENCE     z   CREATE SEQUENCE public.activities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.activities_id_seq;
       public            	   MainAdmin    false    275            s           0    0    activities_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.activities_id_seq OWNED BY public.activities.id;
          public            	   MainAdmin    false    274            �            1259    25325    asset    TABLE     �  CREATE TABLE public.asset (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    self_building character varying(255) NOT NULL,
    rented_building character varying(255),
    rent_paid character varying(255),
    godown character varying(255),
    godown_area character varying(255),
    godown_capacity character varying(255),
    godown_types character varying(255),
    godown_type_agreement character varying(255),
    godown_type_per_annum character varying(255),
    storage character varying(255),
    storage_cold character varying(255),
    storage_dry character varying(255),
    land character varying(255),
    "Land_area" character varying(255),
    land_area_lease character varying(255),
    furniture character varying(255),
    furniture_total character varying(255),
    furniture_amount character varying(255),
    computers character varying(255),
    computers_total character varying(255),
    computers_amount character varying(255),
    item_name json NOT NULL,
    item_no json NOT NULL,
    item_amount json NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    other_mention json
);
    DROP TABLE public.asset;
       public         heap r    	   MainAdmin    false            �            1259    25324    asset_id_seq    SEQUENCE     u   CREATE SEQUENCE public.asset_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.asset_id_seq;
       public            	   MainAdmin    false    243            t           0    0    asset_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.asset_id_seq OWNED BY public.asset.id;
          public            	   MainAdmin    false    242            �            1259    25311    borowing    TABLE     �  CREATE TABLE public.borowing (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "Govt_loan" character varying(255) NOT NULL,
    borrowing_from json,
    borrowing_type json,
    borrowing_amount json,
    borrowing_refunded json,
    borrowing_outstanding json,
    bank_sb_ac character varying(255),
    bank_fd_ac character varying(255),
    bank_rd_ac character varying(255),
    bank_cd_ac character varying(255),
    bank_thrift_ac character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    other_mention json,
    any_other_ac character varying(10),
    ac_name json,
    ac_amount json
);
    DROP TABLE public.borowing;
       public         heap r    	   MainAdmin    false            �            1259    25310    borowing_id_seq    SEQUENCE     x   CREATE SEQUENCE public.borowing_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.borowing_id_seq;
       public            	   MainAdmin    false    241            u           0    0    borowing_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.borowing_id_seq OWNED BY public.borowing.id;
          public            	   MainAdmin    false    240            �            1259    16424    cache    TABLE     �   CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache;
       public         heap r    	   MainAdmin    false            �            1259    16431    cache_locks    TABLE     �   CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);
    DROP TABLE public.cache_locks;
       public         heap r    	   MainAdmin    false            �            1259    16567 	   committee    TABLE     �  CREATE TABLE public.committee (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "President_Name" character varying(255) NOT NULL,
    "President_DOB" character varying(20) NOT NULL,
    "President_Contact" character varying(50) NOT NULL,
    "President_Email" character varying(255) NOT NULL,
    "Secretary_Name" character varying(255) NOT NULL,
    "Secretary_DOB" character varying(20) NOT NULL,
    "Secretary_Contact" character varying(50) NOT NULL,
    "Secretary_Email" character varying(255) NOT NULL,
    "Member_Name" text NOT NULL,
    "Member_Contact" text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.committee;
       public         heap r    	   MainAdmin    false            �            1259    16566    committee_id_seq    SEQUENCE     y   CREATE SEQUENCE public.committee_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.committee_id_seq;
       public            	   MainAdmin    false    235            v           0    0    committee_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.committee_id_seq OWNED BY public.committee.id;
          public            	   MainAdmin    false    234            �            1259    25397    consumer    TABLE     )  CREATE TABLE public.consumer (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    departmental_store character varying(255),
    retails_unit character varying(255),
    no_of_branch integer,
    closing_stock integer,
    purchase_date character varying(255),
    item character varying(255),
    total_sale integer,
    "Controll_wholesale" integer,
    controll_retail integer,
    uncontroll_wholesale integer,
    uncontroll_retail integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.consumer;
       public         heap r    	   MainAdmin    false            �            1259    25396    consumer_id_seq    SEQUENCE     x   CREATE SEQUENCE public.consumer_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.consumer_id_seq;
       public            	   MainAdmin    false    251            w           0    0    consumer_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.consumer_id_seq OWNED BY public.consumer.id;
          public            	   MainAdmin    false    250            �            1259    25411    dairy    TABLE     �  CREATE TABLE public.dairy (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "Nos_of_milch_cow" integer,
    "total_value_of_Milch_cow" integer,
    no_of_cowshed integer,
    other_item character varying(255),
    other_no integer,
    other_amount integer,
    produce_in_litre integer,
    produce_value integer,
    usold_litre integer,
    unsold_value integer,
    dairy_product_item character varying(255),
    dairy_product_value integer,
    collection_facility character varying(255),
    testing_facility character varying(255),
    sale_of_feed_medicine character varying(255),
    sale_of_feed_medicine_value integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.dairy;
       public         heap r    	   MainAdmin    false            �            1259    25410    dairy_id_seq    SEQUENCE     u   CREATE SEQUENCE public.dairy_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.dairy_id_seq;
       public            	   MainAdmin    false    253            x           0    0    dairy_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.dairy_id_seq OWNED BY public.dairy.id;
          public            	   MainAdmin    false    252            �            1259    16456    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap r    	   MainAdmin    false            �            1259    16455    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public            	   MainAdmin    false    229            y           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public            	   MainAdmin    false    228            �            1259    25432    farming    TABLE       CREATE TABLE public.farming (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    st_male integer,
    st_female integer,
    sc_male integer,
    sc_female integer,
    which_landholder integer,
    which_agriculture integer,
    type_produce_agriorhorti character varying(255),
    production_quantity integer,
    farming_activities_amount integer,
    produce_quantity integer,
    produce_amount character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.farming;
       public         heap r    	   MainAdmin    false            �            1259    25431    farming_id_seq    SEQUENCE     w   CREATE SEQUENCE public.farming_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.farming_id_seq;
       public            	   MainAdmin    false    255            z           0    0    farming_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.farming_id_seq OWNED BY public.farming.id;
          public            	   MainAdmin    false    254                       1259    25446 	   fisheries    TABLE     ]  CREATE TABLE public.fisheries (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    male_fisher integer,
    female_fisher integer,
    total_pond integer,
    area_of_pond integer,
    value_of_fish_pond integer,
    nursery_pond integer,
    area_of_nursery_pond integer,
    value_of_nursery_pond integer,
    type_of_fish_reared character varying(255),
    fish_quantity integer,
    sales_of_fresh_fish integer,
    dry_fish integer,
    smoke_fish integer,
    fishing_material_other integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.fisheries;
       public         heap r    	   MainAdmin    false                        1259    25445    fisheries_id_seq    SEQUENCE     y   CREATE SEQUENCE public.fisheries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.fisheries_id_seq;
       public            	   MainAdmin    false    257            {           0    0    fisheries_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.fisheries_id_seq OWNED BY public.fisheries.id;
          public            	   MainAdmin    false    256            �            1259    25339    govtloan    TABLE     �  CREATE TABLE public.govtloan (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "any_Govt_loan" character varying(255) NOT NULL,
    type_of_govt_loan json,
    "Loan_issue_year" json,
    "Loan_sanctioned_amount" json,
    "Outstanding_Principal_amount" json,
    "Outstanding_interest_amount" json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    other_mention json
);
    DROP TABLE public.govtloan;
       public         heap r    	   MainAdmin    false            �            1259    25338    govtloan_id_seq    SEQUENCE     x   CREATE SEQUENCE public.govtloan_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.govtloan_id_seq;
       public            	   MainAdmin    false    245            |           0    0    govtloan_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.govtloan_id_seq OWNED BY public.govtloan.id;
          public            	   MainAdmin    false    244            �            1259    25369 
   handicraft    TABLE     �  CREATE TABLE public.handicraft (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    item_produce character varying(255),
    nos_of_craftsmen integer,
    wages_paid integer,
    sales_turnover integer,
    other_item_produce character varying(255),
    other_nos_of_craftsmen integer,
    other_wages_paid integer,
    other_sales_turnover integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.handicraft;
       public         heap r    	   MainAdmin    false            �            1259    25368    handicraft_id_seq    SEQUENCE     z   CREATE SEQUENCE public.handicraft_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.handicraft_id_seq;
       public            	   MainAdmin    false    249            }           0    0    handicraft_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.handicraft_id_seq OWNED BY public.handicraft.id;
          public            	   MainAdmin    false    248            �            1259    25355    handloom    TABLE       CREATE TABLE public.handloom (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    no_of_looms_own integer,
    natural_dykes character varying(255),
    dyeing_house_own integer,
    item_produce character varying(255),
    total_handlom_sale integer,
    total_powerloom_sale integer,
    total_other_sale integer,
    local_market character varying(255),
    local_market_amount integer,
    export character varying(255),
    export_amount integer,
    production_employee character varying(255),
    admin_employee character varying(255),
    other_employee character varying(255),
    wage_paid integer,
    sale_deport integer,
    workshed character varying(255),
    production_name character varying(255),
    production_quantity integer,
    production_amount integer,
    purchase_name character varying(255),
    purchase_quantity integer,
    purchase_amount integer,
    "Equipments_Name" json,
    "Equipments_Nos" json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.handloom;
       public         heap r    	   MainAdmin    false            �            1259    25354    handloom_id_seq    SEQUENCE     x   CREATE SEQUENCE public.handloom_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.handloom_id_seq;
       public            	   MainAdmin    false    247            ~           0    0    handloom_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.handloom_id_seq OWNED BY public.handloom.id;
          public            	   MainAdmin    false    246                       1259    25567    housings    TABLE     {  CREATE TABLE public.housings (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    borrowing_government integer,
    central_finance_agency integer,
    housing_urban_development_cor integer,
    state_fianance_society integer,
    national_housing_bank integer,
    other_financial_inst integer,
    land_asset character varying(255),
    building_asset character varying(255),
    other_asset character varying(255),
    adavance_year character varying(255),
    advance_amount numeric(8,2),
    recovery_principal integer,
    recovery_interest integer,
    outstanding_principal integer,
    outstanding_interest integer,
    overdue_principal integer,
    overdue_interest integer,
    society_house_construct_number character varying(255),
    society_house_construct_value integer,
    member_house_construct_number character varying(255),
    member_house_construct_value integer,
    independent_house_construct_no character varying(255),
    independent_house_construct_value integer,
    independent_house_construct_earn integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.housings;
       public         heap r    	   MainAdmin    false                       1259    25566    housings_id_seq    SEQUENCE     x   CREATE SEQUENCE public.housings_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.housings_id_seq;
       public            	   MainAdmin    false    271                       0    0    housings_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.housings_id_seq OWNED BY public.housings.id;
          public            	   MainAdmin    false    270                       1259    25525 
   industries    TABLE     �  CREATE TABLE public.industries (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "type_of_Business" json,
    name_of_item_produced json,
    person_employed json,
    wages_paid json,
    sales_turnover json,
    course_offered character varying(255),
    nos_of_trainee integer,
    course_fee integer,
    teaching_staff integer,
    non_teaching_staff integer,
    salary character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.industries;
       public         heap r    	   MainAdmin    false            
           1259    25524    industries_id_seq    SEQUENCE     z   CREATE SEQUENCE public.industries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.industries_id_seq;
       public            	   MainAdmin    false    267            �           0    0    industries_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.industries_id_seq OWNED BY public.industries.id;
          public            	   MainAdmin    false    266            �            1259    25297 
   investment    TABLE     I  CREATE TABLE public.investment (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "investment_Status" character varying(255) NOT NULL,
    type_of_govt_loan json,
    loan_investment_amount json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    other_mention json
);
    DROP TABLE public.investment;
       public         heap r    	   MainAdmin    false            �            1259    25296    investment_id_seq    SEQUENCE     z   CREATE SEQUENCE public.investment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.investment_id_seq;
       public            	   MainAdmin    false    239            �           0    0    investment_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.investment_id_seq OWNED BY public.investment.id;
          public            	   MainAdmin    false    238                       1259    33832    ivcs    TABLE     �  CREATE TABLE public.ivcs (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    activity character varying(255),
    household_covered character varying(255),
    share_holder_member_name integer,
    nos_of_share_subscribe integer,
    amount_share_capitals character varying(255),
    nos_saving_account integer,
    total_saving_mobilised integer,
    nos_rd_account integer,
    total_rd_mobilised integer,
    nos_fd_account integer,
    total_fd_mobilised integer,
    corpus_fund character varying(255),
    nos_loanorborrower_account integer,
    total_loan_disbured integer,
    outstanding_borrower character varying(255),
    outstanding_amount character varying(255),
    product_cmc character varying(255),
    "machinery_tool_CHC" character varying(255),
    agriculture_item character varying(255),
    agriculture_area character varying(255),
    horticulture_item character varying(255),
    horticulture_area character varying(255),
    livestock character varying(255),
    marketing_trading character varying(255),
    consumer_store character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.ivcs;
       public         heap r    	   MainAdmin    false                       1259    33831    ivcs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.ivcs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.ivcs_id_seq;
       public            	   MainAdmin    false    281            �           0    0    ivcs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.ivcs_id_seq OWNED BY public.ivcs.id;
          public            	   MainAdmin    false    280            �            1259    16448    job_batches    TABLE     d  CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);
    DROP TABLE public.job_batches;
       public         heap r    	   MainAdmin    false            �            1259    16439    jobs    TABLE     �   CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);
    DROP TABLE public.jobs;
       public         heap r    	   MainAdmin    false            �            1259    16438    jobs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.jobs_id_seq;
       public            	   MainAdmin    false    226            �           0    0    jobs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;
          public            	   MainAdmin    false    225                       1259    42024    labours    TABLE       CREATE TABLE public.labours (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    society_operation character varying(255),
    "ST" integer,
    "SC" integer,
    of_which_borrower character varying(255),
    other_specify character varying(255),
    no_of_worker integer,
    "Govt_body" character varying(255),
    local_body character varying(255),
    other character varying(255),
    income_earned character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.labours;
       public         heap r    	   MainAdmin    false                       1259    42023    labours_id_seq    SEQUENCE     w   CREATE SEQUENCE public.labours_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.labours_id_seq;
       public            	   MainAdmin    false    283            �           0    0    labours_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.labours_id_seq OWNED BY public.labours.id;
          public            	   MainAdmin    false    282                       1259    42038 
   livestocks    TABLE     �  CREATE TABLE public.livestocks (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    no_of_piggery_shed integer,
    value_of_piggery_shed integer,
    piggery_activities character varying(255),
    total_sale integer,
    no_of_goatery_shed integer,
    value_of_goatery_shed integer,
    goatery_item character varying(255),
    goatery_total_sale integer,
    no_of_poultry_shed integer,
    value_of_poultry_shed integer,
    poultry_item character varying(255),
    poultry_total_sale integer,
    no_of_duckery_shed integer,
    value_of_duckery_shed integer,
    duckery_item character varying(255),
    duckery_total_sale integer,
    no_of_cattle_farming_shed integer,
    value_of_cattle_farming_shed integer,
    cattle_farming_item character varying(255),
    cattle_farming_total_sale integer,
    livestock_name character varying(255),
    livestock_no integer,
    livestock_value integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.livestocks;
       public         heap r    	   MainAdmin    false                       1259    42037    livestocks_id_seq    SEQUENCE     z   CREATE SEQUENCE public.livestocks_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.livestocks_id_seq;
       public            	   MainAdmin    false    285            �           0    0    livestocks_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.livestocks_id_seq OWNED BY public.livestocks.id;
          public            	   MainAdmin    false    284                       1259    25644    mariangjingkienjris    TABLE     �  CREATE TABLE public.mariangjingkienjris (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    lrb_source character varying(255),
    lrb_amount_recieved integer,
    lrb_amount_utilized integer,
    lrb_amount_unutilized integer,
    purpose_of_grant_recieve character varying(255),
    shared_investment character varying(255),
    fee_collection integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 '   DROP TABLE public.mariangjingkienjris;
       public         heap r    	   MainAdmin    false                       1259    25643    mariangjingkienjris_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mariangjingkienjris_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.mariangjingkienjris_id_seq;
       public            	   MainAdmin    false    277            �           0    0    mariangjingkienjris_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.mariangjingkienjris_id_seq OWNED BY public.mariangjingkienjris.id;
          public            	   MainAdmin    false    276                       1259    25468    markets    TABLE     �  CREATE TABLE public.markets (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    agriculture_input_type character varying(255),
    agriculture_input_quantity integer,
    agriculture_input_value integer,
    product_produce json,
    product_quantity json,
    product_value json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.markets;
       public         heap r    	   MainAdmin    false                       1259    25467    markets_id_seq    SEQUENCE     w   CREATE SEQUENCE public.markets_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.markets_id_seq;
       public            	   MainAdmin    false    259            �           0    0    markets_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.markets_id_seq OWNED BY public.markets.id;
          public            	   MainAdmin    false    258            �            1259    16391 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap r    	   MainAdmin    false            �            1259    16390    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public            	   MainAdmin    false    218            �           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public            	   MainAdmin    false    217                       1259    25581    others    TABLE     �  CREATE TABLE public.others (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    course_offered character varying(255),
    nos_of_student integer,
    course_fee integer,
    no_of_teaching_staff integer,
    no_of_non_teaching_staff integer,
    salary_to_staff integer,
    service_provided character varying(255),
    employee integer,
    wage_paid integer,
    turn_over integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.others;
       public         heap r    	   MainAdmin    false                       1259    25580    others_id_seq    SEQUENCE     v   CREATE SEQUENCE public.others_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.others_id_seq;
       public            	   MainAdmin    false    273            �           0    0    others_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.others_id_seq OWNED BY public.others.id;
          public            	   MainAdmin    false    272                       1259    25686    pacs    TABLE     B  CREATE TABLE public.pacs (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    activity character varying(255),
    amount_sanctioned integer,
    nos_of_member_loan_for integer,
    purpose_taken_for character varying(255),
    principal_amount integer,
    interest_amount integer,
    defaulter_no character varying(255),
    defaulter_amount integer,
    npa_principal integer,
    npa_interest integer,
    outstandingloanee_male json,
    outstandingloanee_female json,
    outstandingloanee_clan json,
    outstanding_interest json,
    outstanding_p_amount json,
    years json,
    recovery_female_clan json,
    recovery_male_clan json,
    recovery_clan json,
    female_clan json,
    male_clan json,
    clan json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pacs;
       public         heap r    	   MainAdmin    false                       1259    25685    pacs_id_seq    SEQUENCE     t   CREATE SEQUENCE public.pacs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.pacs_id_seq;
       public            	   MainAdmin    false    279            �           0    0    pacs_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.pacs_id_seq OWNED BY public.pacs.id;
          public            	   MainAdmin    false    278            �            1259    16408    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap r    	   MainAdmin    false                       1259    25483    processings    TABLE     ,  CREATE TABLE public.processings (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    item_name character varying(255),
    item_value integer,
    process_machine_name character varying(255),
    "process_item_Nos" integer,
    process_item_value integer,
    sale_of_item_name character varying(255),
    sale_of_item_quantity integer,
    sale_of_item_amount integer,
    packing character varying(255),
    packaging_type character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.processings;
       public         heap r    	   MainAdmin    false                       1259    25482    processings_id_seq    SEQUENCE     {   CREATE SEQUENCE public.processings_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.processings_id_seq;
       public            	   MainAdmin    false    261            �           0    0    processings_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.processings_id_seq OWNED BY public.processings.id;
          public            	   MainAdmin    false    260            �            1259    16415    sessions    TABLE     �   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap r    	   MainAdmin    false            �            1259    16581    societycapitals    TABLE     \  CREATE TABLE public.societycapitals (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "Admission_fee" numeric(6,2) NOT NULL,
    "Share_face_value" character varying(50) NOT NULL,
    "Authorize_share_capital" character varying(50) NOT NULL,
    "Individual_share" numeric(20,2) NOT NULL,
    "Govt_share" numeric(20,2),
    "Other_coop_share" integer,
    "Primary_Activity" character varying(255) NOT NULL,
    "Secondary_Activity" character varying(255),
    "Tertiary_Activity" character varying(255),
    "Other_Activity" character varying(255),
    "Society_Fair_Price_Shop" character varying(255),
    "Latest_Audit_complete" character varying(20),
    "Audit_Class" character varying(255),
    "Working_Capitals" numeric(20,2),
    "Business_turnover" numeric(20,2),
    "Total_reserve" numeric(20,2),
    "Profit_loss" character varying(50),
    "Net_Profit_Loss" character varying(20),
    "Profit" character varying(20) NOT NULL,
    "Loss" character varying(20) NOT NULL,
    "Declear_Dividen" character varying(255) NOT NULL,
    "Yes_Dividen_Amount_topaid" integer,
    "Yes_Dividen_Amount_topaid_Govt" integer,
    "Yes_Dividen_Challan_date" character varying(50),
    "CDF_Paid" character varying(255) NOT NULL,
    "CDf_Yes_paidamount" integer,
    "CDf_Yes_paidDate" character varying(50),
    "Grant_Type" character varying(255),
    "Grant_Year" character varying(255),
    "Deptt_Name" character varying(255),
    "Grant_Sanctioned" character varying(255),
    "Grant_Release" character varying(255),
    "Date_release" character varying(255),
    "Aid_Type" character varying(255),
    "Aid_Year" character varying(255),
    "Agencies_Name" character varying(255),
    "Aid_Sanctioned" character varying(255),
    "Aid_Grant_Release" character varying(255),
    "Grant_Subsidies" character varying(255),
    "Loan_Sanctioned" integer,
    "Loan_Refunded" integer,
    "Loan_Outstanding" integer,
    "MANAGERIAL_SUBSIDY_RECEIVED_Year" character varying(50),
    "MANAGERIAL_SUBSIDY_RECEIVED_Amount" integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 #   DROP TABLE public.societycapitals;
       public         heap r    	   MainAdmin    false            �            1259    16580    societycapitals_id_seq    SEQUENCE        CREATE SEQUENCE public.societycapitals_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.societycapitals_id_seq;
       public            	   MainAdmin    false    237            �           0    0    societycapitals_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.societycapitals_id_seq OWNED BY public.societycapitals.id;
          public            	   MainAdmin    false    236                       1259    25553    thrifncredits    TABLE     o  CREATE TABLE public.thrifncredits (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    year_contribution character varying(255),
    member_contributed character varying(255),
    borrowing_loan json,
    borrowing_loan_st json,
    borrowing_loan_sc json,
    "borrowing_loan_GO" json,
    borrowing_loan_issues json,
    recover_loan json,
    recover_loan_st json,
    recover_loan_sc json,
    "recover_loan_GO" json,
    recover_loan_principal json,
    recover_loan_interest json,
    outstanding_loan json,
    outstanding_loan_st json,
    outstanding_loan_sc json,
    "outstanding_loan_GO" json,
    outstanding_loan_principal json,
    outstanding_loan_interest json,
    outstanding_loan_defaulters_no json,
    outstanding_laon_issues_defaulters_amount json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.thrifncredits;
       public         heap r    	   MainAdmin    false                       1259    25552    thrifncredits_id_seq    SEQUENCE     }   CREATE SEQUENCE public.thrifncredits_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.thrifncredits_id_seq;
       public            	   MainAdmin    false    269            �           0    0    thrifncredits_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.thrifncredits_id_seq OWNED BY public.thrifncredits.id;
          public            	   MainAdmin    false    268            	           1259    25511    tourisms    TABLE     �  CREATE TABLE public.tourisms (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    deomestic_tourist integer,
    foreign_tourist integer,
    entry_fee_annually integer,
    parking_fee_annually integer,
    other_fee_annually integer,
    total_guest_house_or_lodge integer,
    income_from_guest_house_or_lodge integer,
    other_source integer,
    other_value integer,
    male_guide integer,
    female_guide integer,
    product_promotion character varying(255),
    sale_of_product_annually integer,
    "Equipments_Name" json,
    "Equipments_Nos" json,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.tourisms;
       public         heap r    	   MainAdmin    false                       1259    25510    tourisms_id_seq    SEQUENCE     x   CREATE SEQUENCE public.tourisms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.tourisms_id_seq;
       public            	   MainAdmin    false    265            �           0    0    tourisms_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.tourisms_id_seq OWNED BY public.tourisms.id;
          public            	   MainAdmin    false    264                       1259    25497 
   transports    TABLE     �  CREATE TABLE public.transports (
    id bigint NOT NULL,
    "Society_Id" bigint NOT NULL,
    "nos_of_Goods_vehicle" integer,
    no_of_passenger_vehichle integer,
    vehicle_type character varying(255),
    vehicle_nos integer,
    vehicle_value integer,
    other_asset_name character varying(255),
    other_asset_nos integer,
    other_asset_value integer,
    other_asset_income integer,
    total_driver integer,
    total_driver_wages integer,
    total_helper integer,
    total_helper_wages integer,
    other_total integer,
    others_wages_total integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.transports;
       public         heap r    	   MainAdmin    false                       1259    25496    transports_id_seq    SEQUENCE     z   CREATE SEQUENCE public.transports_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.transports_id_seq;
       public            	   MainAdmin    false    263            �           0    0    transports_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.transports_id_seq OWNED BY public.transports.id;
          public            	   MainAdmin    false    262            �            1259    16398    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap r    	   MainAdmin    false            �            1259    16397    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public            	   MainAdmin    false    220            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public            	   MainAdmin    false    219                       2604    16527    _member_of_society id    DEFAULT     ~   ALTER TABLE ONLY public._member_of_society ALTER COLUMN id SET DEFAULT nextval('public._member_of_society_id_seq'::regclass);
 D   ALTER TABLE public._member_of_society ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    233    232    233                       2604    16492    _societydata id    DEFAULT     r   ALTER TABLE ONLY public._societydata ALTER COLUMN id SET DEFAULT nextval('public._societydata_id_seq'::regclass);
 >   ALTER TABLE public._societydata ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    230    231    231            !           2604    25627    activities id    DEFAULT     n   ALTER TABLE ONLY public.activities ALTER COLUMN id SET DEFAULT nextval('public.activities_id_seq'::regclass);
 <   ALTER TABLE public.activities ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    275    274    275                       2604    25328    asset id    DEFAULT     d   ALTER TABLE ONLY public.asset ALTER COLUMN id SET DEFAULT nextval('public.asset_id_seq'::regclass);
 7   ALTER TABLE public.asset ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    243    242    243                       2604    25314    borowing id    DEFAULT     j   ALTER TABLE ONLY public.borowing ALTER COLUMN id SET DEFAULT nextval('public.borowing_id_seq'::regclass);
 :   ALTER TABLE public.borowing ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    240    241    241                       2604    16570    committee id    DEFAULT     l   ALTER TABLE ONLY public.committee ALTER COLUMN id SET DEFAULT nextval('public.committee_id_seq'::regclass);
 ;   ALTER TABLE public.committee ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    235    234    235                       2604    25400    consumer id    DEFAULT     j   ALTER TABLE ONLY public.consumer ALTER COLUMN id SET DEFAULT nextval('public.consumer_id_seq'::regclass);
 :   ALTER TABLE public.consumer ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    250    251    251                       2604    25414    dairy id    DEFAULT     d   ALTER TABLE ONLY public.dairy ALTER COLUMN id SET DEFAULT nextval('public.dairy_id_seq'::regclass);
 7   ALTER TABLE public.dairy ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    253    252    253            	           2604    16459    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    228    229    229                       2604    25435 
   farming id    DEFAULT     h   ALTER TABLE ONLY public.farming ALTER COLUMN id SET DEFAULT nextval('public.farming_id_seq'::regclass);
 9   ALTER TABLE public.farming ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    255    254    255                       2604    25449    fisheries id    DEFAULT     l   ALTER TABLE ONLY public.fisheries ALTER COLUMN id SET DEFAULT nextval('public.fisheries_id_seq'::regclass);
 ;   ALTER TABLE public.fisheries ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    256    257    257                       2604    25342    govtloan id    DEFAULT     j   ALTER TABLE ONLY public.govtloan ALTER COLUMN id SET DEFAULT nextval('public.govtloan_id_seq'::regclass);
 :   ALTER TABLE public.govtloan ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    244    245    245                       2604    25372    handicraft id    DEFAULT     n   ALTER TABLE ONLY public.handicraft ALTER COLUMN id SET DEFAULT nextval('public.handicraft_id_seq'::regclass);
 <   ALTER TABLE public.handicraft ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    249    248    249                       2604    25358    handloom id    DEFAULT     j   ALTER TABLE ONLY public.handloom ALTER COLUMN id SET DEFAULT nextval('public.handloom_id_seq'::regclass);
 :   ALTER TABLE public.handloom ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    247    246    247                       2604    25570    housings id    DEFAULT     j   ALTER TABLE ONLY public.housings ALTER COLUMN id SET DEFAULT nextval('public.housings_id_seq'::regclass);
 :   ALTER TABLE public.housings ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    271    270    271                       2604    25528    industries id    DEFAULT     n   ALTER TABLE ONLY public.industries ALTER COLUMN id SET DEFAULT nextval('public.industries_id_seq'::regclass);
 <   ALTER TABLE public.industries ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    267    266    267                       2604    25300    investment id    DEFAULT     n   ALTER TABLE ONLY public.investment ALTER COLUMN id SET DEFAULT nextval('public.investment_id_seq'::regclass);
 <   ALTER TABLE public.investment ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    238    239    239            $           2604    33835    ivcs id    DEFAULT     b   ALTER TABLE ONLY public.ivcs ALTER COLUMN id SET DEFAULT nextval('public.ivcs_id_seq'::regclass);
 6   ALTER TABLE public.ivcs ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    281    280    281                       2604    16442    jobs id    DEFAULT     b   ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);
 6   ALTER TABLE public.jobs ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    226    225    226            %           2604    42027 
   labours id    DEFAULT     h   ALTER TABLE ONLY public.labours ALTER COLUMN id SET DEFAULT nextval('public.labours_id_seq'::regclass);
 9   ALTER TABLE public.labours ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    283    282    283            &           2604    42041    livestocks id    DEFAULT     n   ALTER TABLE ONLY public.livestocks ALTER COLUMN id SET DEFAULT nextval('public.livestocks_id_seq'::regclass);
 <   ALTER TABLE public.livestocks ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    284    285    285            "           2604    25647    mariangjingkienjris id    DEFAULT     �   ALTER TABLE ONLY public.mariangjingkienjris ALTER COLUMN id SET DEFAULT nextval('public.mariangjingkienjris_id_seq'::regclass);
 E   ALTER TABLE public.mariangjingkienjris ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    277    276    277                       2604    25471 
   markets id    DEFAULT     h   ALTER TABLE ONLY public.markets ALTER COLUMN id SET DEFAULT nextval('public.markets_id_seq'::regclass);
 9   ALTER TABLE public.markets ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    259    258    259                       2604    16394    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    218    217    218                        2604    25584 	   others id    DEFAULT     f   ALTER TABLE ONLY public.others ALTER COLUMN id SET DEFAULT nextval('public.others_id_seq'::regclass);
 8   ALTER TABLE public.others ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    273    272    273            #           2604    25689    pacs id    DEFAULT     b   ALTER TABLE ONLY public.pacs ALTER COLUMN id SET DEFAULT nextval('public.pacs_id_seq'::regclass);
 6   ALTER TABLE public.pacs ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    278    279    279                       2604    25486    processings id    DEFAULT     p   ALTER TABLE ONLY public.processings ALTER COLUMN id SET DEFAULT nextval('public.processings_id_seq'::regclass);
 =   ALTER TABLE public.processings ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    261    260    261                       2604    16584    societycapitals id    DEFAULT     x   ALTER TABLE ONLY public.societycapitals ALTER COLUMN id SET DEFAULT nextval('public.societycapitals_id_seq'::regclass);
 A   ALTER TABLE public.societycapitals ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    237    236    237                       2604    25556    thrifncredits id    DEFAULT     t   ALTER TABLE ONLY public.thrifncredits ALTER COLUMN id SET DEFAULT nextval('public.thrifncredits_id_seq'::regclass);
 ?   ALTER TABLE public.thrifncredits ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    268    269    269                       2604    25514    tourisms id    DEFAULT     j   ALTER TABLE ONLY public.tourisms ALTER COLUMN id SET DEFAULT nextval('public.tourisms_id_seq'::regclass);
 :   ALTER TABLE public.tourisms ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    264    265    265                       2604    25500    transports id    DEFAULT     n   ALTER TABLE ONLY public.transports ALTER COLUMN id SET DEFAULT nextval('public.transports_id_seq'::regclass);
 <   ALTER TABLE public.transports ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    263    262    263                       2604    16401    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public            	   MainAdmin    false    219    220    220            6          0    16524    _member_of_society 
   TABLE DATA             COPY public._member_of_society (id, "Society_Id", "ST_Male", "ST_Female", "ST_CoopSociety", "ST_PG", "ST_SHG", "SC_Male", "SC_Female", "SC_CoopSociety", "SC_PG", "SC_SHG", "Gen_Male", "Gen_Female", "Gen_CoopSociety", "Gen_PG", "Gen_SHG", "Managing_Male", "Managing_Female", "Date_of_LastAGM", "Employee_Male", "Employee_Female", "Trained_Male", "Trained_Female", "Programme_Type", "Training_Program", "Number_of_Trainee", "Managemnt_Salary", "Management_Expense", "Other_Expense", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    233   %�      4          0    16489    _societydata 
   TABLE DATA           �  COPY public._societydata (id, "Name_of_the_Society", "Registration_No", "Date_of_registration", "Sector_Type", "Email", "Pan_of_Society", "Location_Area", "District", "Block", "Board", "Circle", "Village", "Post_office", "Police_Station", "Pincode", "Operation_District", "Operation_villages", "Affiliation", "Status", "Years_of_Non_function", "Section_Conducted", "Section_Cancellation", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    231   ��      `          0    25624 
   activities 
   TABLE DATA           �   COPY public.activities (id, "Society_Id", activity_1, activity_2, activity_3, activity_4, activity_5, activity_other, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    275   ��      @          0    25325    asset 
   TABLE DATA           �  COPY public.asset (id, "Society_Id", self_building, rented_building, rent_paid, godown, godown_area, godown_capacity, godown_types, godown_type_agreement, godown_type_per_annum, storage, storage_cold, storage_dry, land, "Land_area", land_area_lease, furniture, furniture_total, furniture_amount, computers, computers_total, computers_amount, item_name, item_no, item_amount, created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    243   ��      >          0    25311    borowing 
   TABLE DATA           '  COPY public.borowing (id, "Society_Id", "Govt_loan", borrowing_from, borrowing_type, borrowing_amount, borrowing_refunded, borrowing_outstanding, bank_sb_ac, bank_fd_ac, bank_rd_ac, bank_cd_ac, bank_thrift_ac, created_at, updated_at, other_mention, any_other_ac, ac_name, ac_amount) FROM stdin;
    public            	   MainAdmin    false    241   ��      ,          0    16424    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public            	   MainAdmin    false    223   �      -          0    16431    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public            	   MainAdmin    false    224   �      8          0    16567 	   committee 
   TABLE DATA             COPY public.committee (id, "Society_Id", "President_Name", "President_DOB", "President_Contact", "President_Email", "Secretary_Name", "Secretary_DOB", "Secretary_Contact", "Secretary_Email", "Member_Name", "Member_Contact", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    235   �      H          0    25397    consumer 
   TABLE DATA           �   COPY public.consumer (id, "Society_Id", departmental_store, retails_unit, no_of_branch, closing_stock, purchase_date, item, total_sale, "Controll_wholesale", controll_retail, uncontroll_wholesale, uncontroll_retail, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    251   �B      J          0    25411    dairy 
   TABLE DATA           l  COPY public.dairy (id, "Society_Id", "Nos_of_milch_cow", "total_value_of_Milch_cow", no_of_cowshed, other_item, other_no, other_amount, produce_in_litre, produce_value, usold_litre, unsold_value, dairy_product_item, dairy_product_value, collection_facility, testing_facility, sale_of_feed_medicine, sale_of_feed_medicine_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    253   �B      2          0    16456    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public            	   MainAdmin    false    229   �B      L          0    25432    farming 
   TABLE DATA             COPY public.farming (id, "Society_Id", st_male, st_female, sc_male, sc_female, which_landholder, which_agriculture, type_produce_agriorhorti, production_quantity, farming_activities_amount, produce_quantity, produce_amount, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    255   �B      N          0    25446 	   fisheries 
   TABLE DATA           9  COPY public.fisheries (id, "Society_Id", male_fisher, female_fisher, total_pond, area_of_pond, value_of_fish_pond, nursery_pond, area_of_nursery_pond, value_of_nursery_pond, type_of_fish_reared, fish_quantity, sales_of_fresh_fish, dry_fish, smoke_fish, fishing_material_other, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    257   C      B          0    25339    govtloan 
   TABLE DATA           �   COPY public.govtloan (id, "Society_Id", "any_Govt_loan", type_of_govt_loan, "Loan_issue_year", "Loan_sanctioned_amount", "Outstanding_Principal_amount", "Outstanding_interest_amount", created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    245   4C      F          0    25369 
   handicraft 
   TABLE DATA           �   COPY public.handicraft (id, "Society_Id", item_produce, nos_of_craftsmen, wages_paid, sales_turnover, other_item_produce, other_nos_of_craftsmen, other_wages_paid, other_sales_turnover, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    249   �L      D          0    25355    handloom 
   TABLE DATA           �  COPY public.handloom (id, "Society_Id", no_of_looms_own, natural_dykes, dyeing_house_own, item_produce, total_handlom_sale, total_powerloom_sale, total_other_sale, local_market, local_market_amount, export, export_amount, production_employee, admin_employee, other_employee, wage_paid, sale_deport, workshed, production_name, production_quantity, production_amount, purchase_name, purchase_quantity, purchase_amount, "Equipments_Name", "Equipments_Nos", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    247   �L      \          0    25567    housings 
   TABLE DATA           �  COPY public.housings (id, "Society_Id", borrowing_government, central_finance_agency, housing_urban_development_cor, state_fianance_society, national_housing_bank, other_financial_inst, land_asset, building_asset, other_asset, adavance_year, advance_amount, recovery_principal, recovery_interest, outstanding_principal, outstanding_interest, overdue_principal, overdue_interest, society_house_construct_number, society_house_construct_value, member_house_construct_number, member_house_construct_value, independent_house_construct_no, independent_house_construct_value, independent_house_construct_earn, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    271   M      X          0    25525 
   industries 
   TABLE DATA           �   COPY public.industries (id, "Society_Id", "type_of_Business", name_of_item_produced, person_employed, wages_paid, sales_turnover, course_offered, nos_of_trainee, course_fee, teaching_staff, non_teaching_staff, salary, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    267   9M      <          0    25297 
   investment 
   TABLE DATA           �   COPY public.investment (id, "Society_Id", "investment_Status", type_of_govt_loan, loan_investment_amount, created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    239   VM      f          0    33832    ivcs 
   TABLE DATA           %  COPY public.ivcs (id, "Society_Id", activity, household_covered, share_holder_member_name, nos_of_share_subscribe, amount_share_capitals, nos_saving_account, total_saving_mobilised, nos_rd_account, total_rd_mobilised, nos_fd_account, total_fd_mobilised, corpus_fund, nos_loanorborrower_account, total_loan_disbured, outstanding_borrower, outstanding_amount, product_cmc, "machinery_tool_CHC", agriculture_item, agriculture_area, horticulture_item, horticulture_area, livestock, marketing_trading, consumer_store, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    281   
X      0          0    16448    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public            	   MainAdmin    false    227   'X      /          0    16439    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public            	   MainAdmin    false    226   DX      h          0    42024    labours 
   TABLE DATA           �   COPY public.labours (id, "Society_Id", society_operation, "ST", "SC", of_which_borrower, other_specify, no_of_worker, "Govt_body", local_body, other, income_earned, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    283   aX      j          0    42038 
   livestocks 
   TABLE DATA             COPY public.livestocks (id, "Society_Id", no_of_piggery_shed, value_of_piggery_shed, piggery_activities, total_sale, no_of_goatery_shed, value_of_goatery_shed, goatery_item, goatery_total_sale, no_of_poultry_shed, value_of_poultry_shed, poultry_item, poultry_total_sale, no_of_duckery_shed, value_of_duckery_shed, duckery_item, duckery_total_sale, no_of_cattle_farming_shed, value_of_cattle_farming_shed, cattle_farming_item, cattle_farming_total_sale, livestock_name, livestock_no, livestock_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    285   ~X      b          0    25644    mariangjingkienjris 
   TABLE DATA           �   COPY public.mariangjingkienjris (id, "Society_Id", lrb_source, lrb_amount_recieved, lrb_amount_utilized, lrb_amount_unutilized, purpose_of_grant_recieve, shared_investment, fee_collection, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    277   �X      P          0    25468    markets 
   TABLE DATA           �   COPY public.markets (id, "Society_Id", agriculture_input_type, agriculture_input_quantity, agriculture_input_value, product_produce, product_quantity, product_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    259   �X      '          0    16391 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public            	   MainAdmin    false    218   �X      ^          0    25581    others 
   TABLE DATA           �   COPY public.others (id, "Society_Id", course_offered, nos_of_student, course_fee, no_of_teaching_staff, no_of_non_teaching_staff, salary_to_staff, service_provided, employee, wage_paid, turn_over, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    273   6[      d          0    25686    pacs 
   TABLE DATA           �  COPY public.pacs (id, "Society_Id", activity, amount_sanctioned, nos_of_member_loan_for, purpose_taken_for, principal_amount, interest_amount, defaulter_no, defaulter_amount, npa_principal, npa_interest, outstandingloanee_male, outstandingloanee_female, outstandingloanee_clan, outstanding_interest, outstanding_p_amount, years, recovery_female_clan, recovery_male_clan, recovery_clan, female_clan, male_clan, clan, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    279   S[      *          0    16408    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public            	   MainAdmin    false    221   p[      R          0    25483    processings 
   TABLE DATA           �   COPY public.processings (id, "Society_Id", item_name, item_value, process_machine_name, "process_item_Nos", process_item_value, sale_of_item_name, sale_of_item_quantity, sale_of_item_amount, packing, packaging_type, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    261   �[      +          0    16415    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public            	   MainAdmin    false    222   �[      :          0    16581    societycapitals 
   TABLE DATA           �  COPY public.societycapitals (id, "Society_Id", "Admission_fee", "Share_face_value", "Authorize_share_capital", "Individual_share", "Govt_share", "Other_coop_share", "Primary_Activity", "Secondary_Activity", "Tertiary_Activity", "Other_Activity", "Society_Fair_Price_Shop", "Latest_Audit_complete", "Audit_Class", "Working_Capitals", "Business_turnover", "Total_reserve", "Profit_loss", "Net_Profit_Loss", "Profit", "Loss", "Declear_Dividen", "Yes_Dividen_Amount_topaid", "Yes_Dividen_Amount_topaid_Govt", "Yes_Dividen_Challan_date", "CDF_Paid", "CDf_Yes_paidamount", "CDf_Yes_paidDate", "Grant_Type", "Grant_Year", "Deptt_Name", "Grant_Sanctioned", "Grant_Release", "Date_release", "Aid_Type", "Aid_Year", "Agencies_Name", "Aid_Sanctioned", "Aid_Grant_Release", "Grant_Subsidies", "Loan_Sanctioned", "Loan_Refunded", "Loan_Outstanding", "MANAGERIAL_SUBSIDY_RECEIVED_Year", "MANAGERIAL_SUBSIDY_RECEIVED_Amount", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    237   �^      Z          0    25553    thrifncredits 
   TABLE DATA           !  COPY public.thrifncredits (id, "Society_Id", year_contribution, member_contributed, borrowing_loan, borrowing_loan_st, borrowing_loan_sc, "borrowing_loan_GO", borrowing_loan_issues, recover_loan, recover_loan_st, recover_loan_sc, "recover_loan_GO", recover_loan_principal, recover_loan_interest, outstanding_loan, outstanding_loan_st, outstanding_loan_sc, "outstanding_loan_GO", outstanding_loan_principal, outstanding_loan_interest, outstanding_loan_defaulters_no, outstanding_laon_issues_defaulters_amount, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    269   }      V          0    25511    tourisms 
   TABLE DATA           s  COPY public.tourisms (id, "Society_Id", deomestic_tourist, foreign_tourist, entry_fee_annually, parking_fee_annually, other_fee_annually, total_guest_house_or_lodge, income_from_guest_house_or_lodge, other_source, other_value, male_guide, female_guide, product_promotion, sale_of_product_annually, "Equipments_Name", "Equipments_Nos", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    265   )}      T          0    25497 
   transports 
   TABLE DATA           Y  COPY public.transports (id, "Society_Id", "nos_of_Goods_vehicle", no_of_passenger_vehichle, vehicle_type, vehicle_nos, vehicle_value, other_asset_name, other_asset_nos, other_asset_value, other_asset_income, total_driver, total_driver_wages, total_helper, total_helper_wages, other_total, others_wages_total, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    263   F}      )          0    16398    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    220   c}      �           0    0    _member_of_society_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public._member_of_society_id_seq', 1672, true);
          public            	   MainAdmin    false    232            �           0    0    _societydata_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public._societydata_id_seq', 1364, true);
          public            	   MainAdmin    false    230            �           0    0    activities_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.activities_id_seq', 21, true);
          public            	   MainAdmin    false    274            �           0    0    asset_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.asset_id_seq', 156, true);
          public            	   MainAdmin    false    242            �           0    0    borowing_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.borowing_id_seq', 153, true);
          public            	   MainAdmin    false    240            �           0    0    committee_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.committee_id_seq', 1543, true);
          public            	   MainAdmin    false    234            �           0    0    consumer_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.consumer_id_seq', 2, true);
          public            	   MainAdmin    false    250            �           0    0    dairy_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.dairy_id_seq', 2, true);
          public            	   MainAdmin    false    252            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public            	   MainAdmin    false    228            �           0    0    farming_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.farming_id_seq', 3, true);
          public            	   MainAdmin    false    254            �           0    0    fisheries_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.fisheries_id_seq', 3, true);
          public            	   MainAdmin    false    256            �           0    0    govtloan_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.govtloan_id_seq', 151, true);
          public            	   MainAdmin    false    244            �           0    0    handicraft_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.handicraft_id_seq', 1, true);
          public            	   MainAdmin    false    248            �           0    0    handloom_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.handloom_id_seq', 4, true);
          public            	   MainAdmin    false    246            �           0    0    housings_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.housings_id_seq', 2, true);
          public            	   MainAdmin    false    270            �           0    0    industries_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.industries_id_seq', 2, true);
          public            	   MainAdmin    false    266            �           0    0    investment_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.investment_id_seq', 154, true);
          public            	   MainAdmin    false    238            �           0    0    ivcs_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.ivcs_id_seq', 3, true);
          public            	   MainAdmin    false    280            �           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public            	   MainAdmin    false    225            �           0    0    labours_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.labours_id_seq', 1, true);
          public            	   MainAdmin    false    282            �           0    0    livestocks_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.livestocks_id_seq', 8, true);
          public            	   MainAdmin    false    284            �           0    0    mariangjingkienjris_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.mariangjingkienjris_id_seq', 5, true);
          public            	   MainAdmin    false    276            �           0    0    markets_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.markets_id_seq', 2, true);
          public            	   MainAdmin    false    258            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 79, true);
          public            	   MainAdmin    false    217            �           0    0    others_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.others_id_seq', 2, true);
          public            	   MainAdmin    false    272            �           0    0    pacs_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.pacs_id_seq', 2, true);
          public            	   MainAdmin    false    278            �           0    0    processings_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.processings_id_seq', 3, true);
          public            	   MainAdmin    false    260            �           0    0    societycapitals_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.societycapitals_id_seq', 1866, true);
          public            	   MainAdmin    false    236            �           0    0    thrifncredits_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.thrifncredits_id_seq', 4, true);
          public            	   MainAdmin    false    268            �           0    0    tourisms_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.tourisms_id_seq', 3, true);
          public            	   MainAdmin    false    264            �           0    0    transports_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.transports_id_seq', 3, true);
          public            	   MainAdmin    false    262            �           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 6, true);
          public            	   MainAdmin    false    219            C           2606    16531 *   _member_of_society _member_of_society_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public._member_of_society
    ADD CONSTRAINT _member_of_society_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public._member_of_society DROP CONSTRAINT _member_of_society_pkey;
       public              	   MainAdmin    false    233            A           2606    16496    _societydata _societydata_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public._societydata
    ADD CONSTRAINT _societydata_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public._societydata DROP CONSTRAINT _societydata_pkey;
       public              	   MainAdmin    false    231            m           2606    25631    activities activities_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.activities
    ADD CONSTRAINT activities_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.activities DROP CONSTRAINT activities_pkey;
       public              	   MainAdmin    false    275            o           2606    25638 '   activities activities_society_id_unique 
   CONSTRAINT     j   ALTER TABLE ONLY public.activities
    ADD CONSTRAINT activities_society_id_unique UNIQUE ("Society_Id");
 Q   ALTER TABLE ONLY public.activities DROP CONSTRAINT activities_society_id_unique;
       public              	   MainAdmin    false    275            M           2606    25332    asset asset_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.asset
    ADD CONSTRAINT asset_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.asset DROP CONSTRAINT asset_pkey;
       public              	   MainAdmin    false    243            K           2606    25318    borowing borowing_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.borowing
    ADD CONSTRAINT borowing_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.borowing DROP CONSTRAINT borowing_pkey;
       public              	   MainAdmin    false    241            6           2606    16437    cache_locks cache_locks_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);
 F   ALTER TABLE ONLY public.cache_locks DROP CONSTRAINT cache_locks_pkey;
       public              	   MainAdmin    false    224            4           2606    16430    cache cache_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);
 :   ALTER TABLE ONLY public.cache DROP CONSTRAINT cache_pkey;
       public              	   MainAdmin    false    223            E           2606    16574    committee committee_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.committee
    ADD CONSTRAINT committee_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.committee DROP CONSTRAINT committee_pkey;
       public              	   MainAdmin    false    235            U           2606    25404    consumer consumer_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.consumer
    ADD CONSTRAINT consumer_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.consumer DROP CONSTRAINT consumer_pkey;
       public              	   MainAdmin    false    251            W           2606    25418    dairy dairy_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.dairy
    ADD CONSTRAINT dairy_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.dairy DROP CONSTRAINT dairy_pkey;
       public              	   MainAdmin    false    253            =           2606    16464    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public              	   MainAdmin    false    229            ?           2606    16466 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public              	   MainAdmin    false    229            Y           2606    25439    farming farming_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.farming
    ADD CONSTRAINT farming_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.farming DROP CONSTRAINT farming_pkey;
       public              	   MainAdmin    false    255            [           2606    25451    fisheries fisheries_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.fisheries
    ADD CONSTRAINT fisheries_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.fisheries DROP CONSTRAINT fisheries_pkey;
       public              	   MainAdmin    false    257            O           2606    25346    govtloan govtloan_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.govtloan
    ADD CONSTRAINT govtloan_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.govtloan DROP CONSTRAINT govtloan_pkey;
       public              	   MainAdmin    false    245            S           2606    25376    handicraft handicraft_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.handicraft
    ADD CONSTRAINT handicraft_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.handicraft DROP CONSTRAINT handicraft_pkey;
       public              	   MainAdmin    false    249            Q           2606    25362    handloom handloom_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.handloom
    ADD CONSTRAINT handloom_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.handloom DROP CONSTRAINT handloom_pkey;
       public              	   MainAdmin    false    247            i           2606    25574    housings housings_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.housings
    ADD CONSTRAINT housings_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.housings DROP CONSTRAINT housings_pkey;
       public              	   MainAdmin    false    271            e           2606    25532    industries industries_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.industries
    ADD CONSTRAINT industries_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.industries DROP CONSTRAINT industries_pkey;
       public              	   MainAdmin    false    267            I           2606    25304    investment investment_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.investment
    ADD CONSTRAINT investment_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.investment DROP CONSTRAINT investment_pkey;
       public              	   MainAdmin    false    239            u           2606    33839    ivcs ivcs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.ivcs
    ADD CONSTRAINT ivcs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.ivcs DROP CONSTRAINT ivcs_pkey;
       public              	   MainAdmin    false    281            ;           2606    16454    job_batches job_batches_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.job_batches DROP CONSTRAINT job_batches_pkey;
       public              	   MainAdmin    false    227            8           2606    16446    jobs jobs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.jobs DROP CONSTRAINT jobs_pkey;
       public              	   MainAdmin    false    226            w           2606    42031    labours labours_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.labours
    ADD CONSTRAINT labours_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.labours DROP CONSTRAINT labours_pkey;
       public              	   MainAdmin    false    283            y           2606    42045    livestocks livestocks_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.livestocks
    ADD CONSTRAINT livestocks_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.livestocks DROP CONSTRAINT livestocks_pkey;
       public              	   MainAdmin    false    285            q           2606    25651 ,   mariangjingkienjris mariangjingkienjris_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.mariangjingkienjris
    ADD CONSTRAINT mariangjingkienjris_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.mariangjingkienjris DROP CONSTRAINT mariangjingkienjris_pkey;
       public              	   MainAdmin    false    277            ]           2606    25475    markets markets_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.markets
    ADD CONSTRAINT markets_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.markets DROP CONSTRAINT markets_pkey;
       public              	   MainAdmin    false    259            (           2606    16396    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public              	   MainAdmin    false    218            k           2606    25588    others others_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.others
    ADD CONSTRAINT others_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.others DROP CONSTRAINT others_pkey;
       public              	   MainAdmin    false    273            s           2606    25693    pacs pacs_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.pacs
    ADD CONSTRAINT pacs_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.pacs DROP CONSTRAINT pacs_pkey;
       public              	   MainAdmin    false    279            .           2606    16414 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public              	   MainAdmin    false    221            _           2606    25490    processings processings_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.processings
    ADD CONSTRAINT processings_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.processings DROP CONSTRAINT processings_pkey;
       public              	   MainAdmin    false    261            1           2606    16421    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public              	   MainAdmin    false    222            G           2606    16588 $   societycapitals societycapitals_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.societycapitals
    ADD CONSTRAINT societycapitals_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.societycapitals DROP CONSTRAINT societycapitals_pkey;
       public              	   MainAdmin    false    237            g           2606    25560     thrifncredits thrifncredits_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.thrifncredits
    ADD CONSTRAINT thrifncredits_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.thrifncredits DROP CONSTRAINT thrifncredits_pkey;
       public              	   MainAdmin    false    269            c           2606    25518    tourisms tourisms_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.tourisms
    ADD CONSTRAINT tourisms_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.tourisms DROP CONSTRAINT tourisms_pkey;
       public              	   MainAdmin    false    265            a           2606    25504    transports transports_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.transports
    ADD CONSTRAINT transports_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.transports DROP CONSTRAINT transports_pkey;
       public              	   MainAdmin    false    263            *           2606    16407    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public              	   MainAdmin    false    220            ,           2606    16405    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public              	   MainAdmin    false    220            9           1259    16447    jobs_queue_index    INDEX     B   CREATE INDEX jobs_queue_index ON public.jobs USING btree (queue);
 $   DROP INDEX public.jobs_queue_index;
       public              	   MainAdmin    false    226            /           1259    16423    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public              	   MainAdmin    false    222            2           1259    16422    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public              	   MainAdmin    false    222            z           2606    16532 8   _member_of_society _member_of_society_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public._member_of_society
    ADD CONSTRAINT _member_of_society_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 b   ALTER TABLE ONLY public._member_of_society DROP CONSTRAINT _member_of_society_society_id_foreign;
       public            	   MainAdmin    false    231    233    4929            �           2606    25632 (   activities activities_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.activities
    ADD CONSTRAINT activities_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.activities DROP CONSTRAINT activities_society_id_foreign;
       public            	   MainAdmin    false    275    4929    231                       2606    25333    asset asset_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.asset
    ADD CONSTRAINT asset_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.asset DROP CONSTRAINT asset_society_id_foreign;
       public            	   MainAdmin    false    231    243    4929            ~           2606    25319 $   borowing borowing_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.borowing
    ADD CONSTRAINT borowing_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.borowing DROP CONSTRAINT borowing_society_id_foreign;
       public            	   MainAdmin    false    241    231    4929            {           2606    16575 &   committee committee_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.committee
    ADD CONSTRAINT committee_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.committee DROP CONSTRAINT committee_society_id_foreign;
       public            	   MainAdmin    false    231    235    4929            �           2606    25405 $   consumer consumer_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.consumer
    ADD CONSTRAINT consumer_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.consumer DROP CONSTRAINT consumer_society_id_foreign;
       public            	   MainAdmin    false    251    231    4929            �           2606    25419    dairy dairy_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.dairy
    ADD CONSTRAINT dairy_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 H   ALTER TABLE ONLY public.dairy DROP CONSTRAINT dairy_society_id_foreign;
       public            	   MainAdmin    false    253    231    4929            �           2606    25440 "   farming farming_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.farming
    ADD CONSTRAINT farming_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.farming DROP CONSTRAINT farming_society_id_foreign;
       public            	   MainAdmin    false    4929    255    231            �           2606    25452 &   fisheries fisheries_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.fisheries
    ADD CONSTRAINT fisheries_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 P   ALTER TABLE ONLY public.fisheries DROP CONSTRAINT fisheries_society_id_foreign;
       public            	   MainAdmin    false    4929    231    257            �           2606    25347 $   govtloan govtloan_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.govtloan
    ADD CONSTRAINT govtloan_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.govtloan DROP CONSTRAINT govtloan_society_id_foreign;
       public            	   MainAdmin    false    231    4929    245            �           2606    25377 (   handicraft handicraft_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.handicraft
    ADD CONSTRAINT handicraft_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.handicraft DROP CONSTRAINT handicraft_society_id_foreign;
       public            	   MainAdmin    false    231    4929    249            �           2606    25363 $   handloom handloom_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.handloom
    ADD CONSTRAINT handloom_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.handloom DROP CONSTRAINT handloom_society_id_foreign;
       public            	   MainAdmin    false    4929    247    231            �           2606    25575 $   housings housings_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.housings
    ADD CONSTRAINT housings_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.housings DROP CONSTRAINT housings_society_id_foreign;
       public            	   MainAdmin    false    4929    231    271            �           2606    25533 (   industries industries_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.industries
    ADD CONSTRAINT industries_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.industries DROP CONSTRAINT industries_society_id_foreign;
       public            	   MainAdmin    false    4929    267    231            }           2606    25305 (   investment investment_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.investment
    ADD CONSTRAINT investment_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.investment DROP CONSTRAINT investment_society_id_foreign;
       public            	   MainAdmin    false    239    231    4929            �           2606    33840    ivcs ivcs_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.ivcs
    ADD CONSTRAINT ivcs_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.ivcs DROP CONSTRAINT ivcs_society_id_foreign;
       public            	   MainAdmin    false    4929    281    231            �           2606    42032 "   labours labours_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.labours
    ADD CONSTRAINT labours_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.labours DROP CONSTRAINT labours_society_id_foreign;
       public            	   MainAdmin    false    4929    283    231            �           2606    42046 (   livestocks livestocks_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.livestocks
    ADD CONSTRAINT livestocks_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.livestocks DROP CONSTRAINT livestocks_society_id_foreign;
       public            	   MainAdmin    false    4929    285    231            �           2606    25652 :   mariangjingkienjris mariangjingkienjris_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.mariangjingkienjris
    ADD CONSTRAINT mariangjingkienjris_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 d   ALTER TABLE ONLY public.mariangjingkienjris DROP CONSTRAINT mariangjingkienjris_society_id_foreign;
       public            	   MainAdmin    false    277    4929    231            �           2606    25476 "   markets markets_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.markets
    ADD CONSTRAINT markets_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.markets DROP CONSTRAINT markets_society_id_foreign;
       public            	   MainAdmin    false    231    4929    259            �           2606    25589     others others_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.others
    ADD CONSTRAINT others_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.others DROP CONSTRAINT others_society_id_foreign;
       public            	   MainAdmin    false    273    231    4929            �           2606    25694    pacs pacs_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.pacs
    ADD CONSTRAINT pacs_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 F   ALTER TABLE ONLY public.pacs DROP CONSTRAINT pacs_society_id_foreign;
       public            	   MainAdmin    false    4929    231    279            �           2606    25491 *   processings processings_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.processings
    ADD CONSTRAINT processings_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 T   ALTER TABLE ONLY public.processings DROP CONSTRAINT processings_society_id_foreign;
       public            	   MainAdmin    false    261    4929    231            |           2606    16589 2   societycapitals societycapitals_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.societycapitals
    ADD CONSTRAINT societycapitals_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 \   ALTER TABLE ONLY public.societycapitals DROP CONSTRAINT societycapitals_society_id_foreign;
       public            	   MainAdmin    false    231    4929    237            �           2606    25561 .   thrifncredits thrifncredits_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.thrifncredits
    ADD CONSTRAINT thrifncredits_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 X   ALTER TABLE ONLY public.thrifncredits DROP CONSTRAINT thrifncredits_society_id_foreign;
       public            	   MainAdmin    false    231    269    4929            �           2606    25519 $   tourisms tourisms_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.tourisms
    ADD CONSTRAINT tourisms_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 N   ALTER TABLE ONLY public.tourisms DROP CONSTRAINT tourisms_society_id_foreign;
       public            	   MainAdmin    false    231    265    4929            �           2606    25505 (   transports transports_society_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.transports
    ADD CONSTRAINT transports_society_id_foreign FOREIGN KEY ("Society_Id") REFERENCES public._societydata(id) ON DELETE CASCADE;
 R   ALTER TABLE ONLY public.transports DROP CONSTRAINT transports_society_id_foreign;
       public            	   MainAdmin    false    4929    263    231            6   i  x���K��8�ב���@�ò�}�^N/f1ݛ�?�e�%�BV�Q@��)���������Cև���oq��ӡ��~��]�v���g�g�ʾ$�h�)3���I�n��@ZA��i}�.��d��6E���/�0�K����-R�NCHN��v��	�����?ߑ�L�]z,��mdW�K��}�7h��v�����f�
%�3Ƌ��gL
/����X���?����zA�v˄G�_ny��IO�����.��G��e���M�b�kc}��q�S���?������x�^~f�zX;24Hh ,PN��3��*�x��m6���w����-x����X��W�[������x�D8���:�{�?�BP�Z{2T��)�#�<�>Ut}���aˡ�KO���`+WR��:]Ŵ�9��3��L5t�ޢ�L�� ң�%�g��@�pY�:0��(ɘ�O�W��WV��@��nX<�Y���q������\b{kO;e( �����Ⱥ颌�M��Ђ:XW�P�ü	s����fN@u����e^��T�~Vv�N֛8麌D��>v��s
���)�'C(O��?�����<��:���24 ��h��O3O*N0�����)�S�62��c���	r.>S��T��)���� ��N��T� �^W�
P�._UY�Nbܳ�[�5/=@��r.��C���E�&�2ܓ��cO�0�š��\?���f�o�{2��><ꕲ�rL=�0��B��k�o�ָ�)�Q����hu0�l{�����QuQm|=e�B1
�z�:��ԌDK��?r�P*�=�����~vZ>z���oa5e�ғQ��?J��h��s$�~o���m�J5"hhb�)c��Y��1M�O�dr��%��6�g%o͘%\HJ&Ĵ�kH����R�=��C��{���=@&���'~:�SRق23��6>p���H8ʨ�\� ��;�Z r�^�aoV�.CFi]!M�V�d{f�zAX��)s�\�2��:&<8��ZF���O�Y_�Z�F��@�oh/�#��F`Wl���^q��}����pt����D�l�Z
��c�-ެ���ֻ!dn=��@��n ���rvW�����_i� =��Y�v�$#P�ZW@�����fiғ��l9�?`9���v�c��R�+CH���ѿ´�UA�JC�mc�ʂ&-��)W���3c���������z��5�ԓd����5"�����D��r-[;h��3��i����f����޽낫�NwZ\},?�����/Wx)Ĳ@g�â�?��ԝׯ��fw��F�S�
p��j6��U��������_��?���׿��U�DJӓ���G�������10��zEv�c��ZU��PXUn��p��K���9�~��i�5�"߲��N6Ho*��V�{����]Е�AF��~��ֻOgq�u�LU�W2��l9ʀ+Qs��O��sW(�-�����������S�Рr!پ��y��k �O)���su�S�P_$&Q�,�çm��6Y��k�tT2p�$=��,�T�ڙ�zg+!�y�`Vɹܓq��D�����c>�|��rqr� �`媏Y P�F��&�2c�ar��
�cJ�+nuUJ����U��F	%�u��C�_��1@#J�dh@�[����T�*Δ>,����d��Jh� ���(�15)�C���PG�Dﰺ@�dh`ņ�Ԍ'U��f��/%�<��ڧ@Ƶ�O�L�`�F�kl���*x��*x�A(-�/�24��5:�̧w"T
H����Jh6�)y��Pj�8a�~ʽ��r�1�(/ϔ{2P���p��9%h����L�*���I�8 z
h��W�h y���׵���(M8:e�C����%)�HW�2I{h~�K^�{7A[W2�2�CnT $�2Ah�����v��ѿ\=߂�u�W��B��)K��?��e/$�d�½��}/�Ө�[�=���|N	ǽ(&S6X�x���T(�nE����=��żܓ��5^��cyt�A�}k��������ؕ��jP䥢�9��y�Yn�m:���} �r�ۓ�̫�����6���	R������ԫ�O4����O2/ `��P�w���8������&��+�:e�C�J�j�e:�[�u��G�ė24�zW<{�R;X�$�⇦*>e�C~���-�j�(C�D�Y �%�:d��}J��s�&W-�����:d�[oNz�/YHؽRp�w#s��sol&��um����nF�*��݆EG���/n>1:!֊bCCO$�Yx��7Y���;�uN�m��;2SA�'n�b����0�}��5���-m�	a�� ��6�?<��a��k#���JC=\Lp����]���	��/��s�֜�S|�j@�C4��;�_0�����R�Ҝ���O�r*����mF��( i�8�!3}�o�������e���ZڕLQ�u�j�Ρ:?P���/r����ϽCg
�ʡ*�F �S���L~89wS (FcO(i�3
	���O���+_��,f3-y.EGKD/���Q�dm؞���x��Ӱz�ؠ���d@��8lmw�Mt���N�W%�?�]ռv%z:�mn�E����s���l�X4����#$�#��TV��7�����V�M%����r>��zW��W=���T�Bg��X97}�L�X�ݐ�N�>�ܐd�hɰ�)��"3���u�TA�����U��TW0�T�U�z>_�KwZ��*�����*X�1�0��\�����"*P0a����cʲW}��1��J*4$�FpbS���;�ĵ'BR��Z�3��q��K���L�4������':�T�(��_,;��o�V<��'��6GS��- *e�%Ё����>�ƽ��0w>=���3�r��t�e��C	-6�b%CX�D�<�oˉ��/9j%SPF&�X�m�6I=/z���|&t�20�2-ʐ�c��j���, )���P��	}���&�k����<�Z-֧Q�dh�y{�n\P#�<�rK�BW&��Lܬ�����f���e]#�֓k#��A/w8&k��\���h�˝2Pa0h�>��x���+f�^J)x)�}�J���'�Ú�b�5���S~���@���:���@���O�Y* Y�o�)��4��5&�m7��4���ﳊ;��Г��J���`\sz{�q�O�����J&$ƙ�â�v)!�O�u�E��q� �ĸ�L�.�v#��܅\���x�P8�^yzl�7�L�k���Q�:/������2��ŠOb�t�2�X���m���x���u�Г���]��$�����3{�����'�8�z�yL��N�4hl��S(�L��M㡤�3Д����
�����"َ=����ԓ
�[��B��%Cy��Wi���0�M���Ld��,f���ٕLc�\r�4t�@�%ބ�x��=��2e7q��<���멅J&tQ��{���T����r�ōv����$�#�BG�݅�̓V2@�*7�j���g���*�P�H�'�0�2��/:`���� ����ƯUG�͜����*��2!㡣�٦�\�5 u���2@m&}�����H3o�{{W��~|O���x8��c3���RG�)v�-4o�V20!�d�����%��L�Q��Mx� ��R�g�id߄����	�`�,��v%F�;�[X�u�f�ܹ�gXz20a$=P����lyA���r8e��H�:e��X�Xa?c]{qD��Ȝ2@a$=��37Z)�
�8�H���J(�d��E�}�ӕ��voN�f^��7m+�p���7&f�^ϥ�P8i�ߚ�@�z��)(C�a�K�a�µohL�צd�� ��l��e����{o�����8��/����m�&���____�f�,b      4      x��}[s붒�3�+��TQ޼_�4�%�Z�l�N&U�[��%�T�R<ڿ�t 	R�x�4I�33�KT����Fw����!Ͷ+n��4����O�i��?��l���[�Z�_�J�5�¿|y����f'�o��ߧ�i�ɟ������$��.^����t6y�C�|{�^�޿�>O�����<���Lo���O���/Y��&�e@����H��xO"�!�ȓ��y[���6%+�d�;	�MH�[�a&�I����eB�E�|�}5i���������6=o��C"����7aK����÷��H�d���ذ�h?i�j�?��큮������	H��AȂ���
���.X�~��d����VTݱf�M����Z0P�0!Y%��oWs��'�6NsF�+��H�F��l�$Y�xA.�`�ɷɋ�j��a�~'X8B��{�Hw�	� 5�>��eә��ّ
�L��˗$^R�gW�������Xk�X3ǚ�DC�u�% �h�	(ؓC�|!�0
S͙�`����xi����lz��÷�����6�L�/�g�g~�o�/������wO���|H�o՗�����|�?q4,��q����l�uc��%M�UY�P^W��e��m�a��m�NEw��7�x�
7_M4�p�_�bǺ�<� 'l����x*�BƳ�h�'��V��"�1t4���wOR������	&��ˋ�x����~��� N��.�a)չ�k�s�6S^��d��Q����@�5M�a�]�^Gw9_��#��k�D��q2�@f\��w$LIu9��H��� `o�]��g�6�r O��b�-ɞ��� ]���d��������t�zu;�+A�N��'s�q����uY��|�,g���Va ˽6�j�!f�tI`h�}�̓ ��[�∬HDR��7^wX�;b�o�'89�2��d�IP�Ț�r�`I�$�Ħ�M����.��9��n��̻�WQʛ�a{c u�h��%]Q��W� �C����]�MC6���Ǉ����8A;�fx��{���p�첦�m�����c�4Dϖ�I��E� I�Y�e�ښ�y�Y�o�~�{�yl�?Ĥ�}���:̮8=�"��X��i��#�l��t	�0U�&#\C~�Y�(]�m���HL~��'4�ɉ�Q������s������g����Y��~����U1a�S������;�!&,���J{�|��Z����Aj�!R�t����c��5�u��X�$"�_�۬��lr�i�v�W��=�,Y�]�R@�থ�*���6#u�%`�h�'Ak��$Bf��� �N�+�����8|*�p����iҌ,`փ�J>�ș��E�H�	?��y#��UX�u2�B�������ئr�16�&"��Oco��%�T�� w}w>�Χ��ɩ�B`�G0eȺ�~^��
�����l����,�b�7QMݪY5�|��rW���/�G��N���SM�ʻ�qtIig�j�VT=�ǖ�D�5C��v��=�S티%1�'�HuA�h�j':�L3L.TFL����y��}�I��m�&�ǰ-����m�m�|a�T��7�'o��z����iM4�Ғ^�p����oS?�����.M~�p�O��� �a-����VA�&�
L:�O8���ť��8�&uI��b4�_[�%��z@\^�!j��g�Ʋ!,�i����8R�wƬ�k����5��!~�(34?�ر�C�Q|�o�P��-HB}�ڂ;-�
�"��>\F[�;V\P�f��h�
!����R�h�K���a���8��i�Y�6���UU&5�j�O0��'�?u������N�J�ty��Ҩ�ز�h ���ؐ��OS�w��3��w$��~�e��@8�T��xY68�M.�~T�n/��ݜ���j�wi$�ʌG�t��l[�4�fW�{�V�����;��/�Ո٪x͓{q(��=֬&���7�~�*Ў[��L�<Γ���y7�q����Ӭ��X; Ʀ�DC�)��e�.�T������?By��� )��П���_�s$;������W���N�LZ��$2�)� $'��~�"�vM>�a�_D]����LBZ�5�	
m���|�׻�Qy�-L*�$
c��Ip�S�p��&���#��������t�U�cͨH��c��&	���5U;����>(s�X(����M�kX23X���t�mZ��WAZz��)YG0�u�9y�������r���e��}��$�۝A�xcK�3,���Ia�q�'��� f�j�'�yyO�Ht�w�x�F���B�,��9ԟ`�Ⱥ�t�����,��׵
|u� ����q�y���} ѢT�D`�~V'馴˚��o��ώ��jM��i���
�~Z�J/"m�&�kz�M����D��f$���k�gʚy�+D�xh��htj�t�'_�ď�4���I�������TW��!H/��[R_��<�Y��:���,4;���Ԃ=&*_%Q���fJhE\�Ot���Q��ÿ�3lZY�'��e��CG]s ��N���I���3�ΦJݐ�>kZ^�����1 i��CX��e_�y�K��A��� �3��t���@k��"<�\ �_p�[��LܿȽ��}�%��,��fųX�R]�o�/���eu����0�6}�S��������l@���6
��	��nck~zQ���	�-�\��9��1(`�YcUo���giݐ0��Aib��l�S��A},��U��{���:�K]����K�W�5)i����o�gaPu8d�*w8Ȧ�<�7rT4u��A�-@J��K~� $��j &Q.�$��v�'zn	h2��%K��w�&�����#%�1�dd�IRe��2߁��n��0*�k%�Œ�	�b]̸�	��Y�l[��Ǭ�=Y�7:��@��Q�3/i���ђ)��|�F���u���f������A���`��ImO�U�gXB+ᖪ+�9Y;حV�ry��2T����$&tV�23�v�vAw
!҅z�83��Xt�x�/s��S�|g�c�5���ۨ||�+`��%�� _к~��P�M��2 )��ݘe�ģ?������&��J\D�H��7�/w�a�����a�*�i9#�� �M,�n^�߆��ǯ��~�}<\�M�Y�~��K������ܿ�=+���v5w�{��z�,,��1єͫ�=	7�B{��+6��7���r�,1*:%�|F���7L�����^9�+]h5�_����:��?��Cs�č������x-�x�TjB�Z�5� _K�i���]�I\������E�k6��}m���Y0���j7�s���`��j��)��c(��?�����&/��kσ}�yg{�
�Vg ���X7�h���=0	�����f�hH9_��NL�X��a?L��~��N�.�;��6� ]ۥn�����^�XS�*ƚw���1��Y���֢�g������t��Eu�����	�&6ѐ��b��t�Ñ��8'�7��r�AƢ��8��<�m���h�)=�F�dI��g�J������.t"��l�1]��@'�`���&]=>�_g7ϧ�}�狭�*e(K�����R
�,*_���d�����h����:/[�������	;�y���V�t���cH���'B���'�xF%4��\d����N�<˶��J�J�K��gXmvz	��SNMBM�AH"䞔�K�$z��g���'���u�`8�5؀��~˻MC`�[��^� oyb��@C�@�1��ˢh�y���}:�{Q���M���:�+6�79�6��͵�������j[+`UQ5㫫?�\�4�Q�>��P6�o�v XG%�ҟ盫�_.ZQ����6�EC�
H$��Ni[-`����Q����lH�.��Ȳ�x<M��4D�d�����W�
^]� xmWU��"xi{	���y0�D7�@C�5i��8���N��}x���<y����j��F�z||����
�����t6�{���l$O�3�X���N��    �$�4
�a�Jڡ<���Y1(q��A�Um,*B,�uv?���}}0 2�t���Ƥ�p�ω����Е�6�����&&�
4D��Ǉo���[x�A���z#��r����MO���tG�ڮ]�9�5�]sǷ{Id�Wӆ�Ax-�l.��4�Of��jGR��� ���°�Y�4j]<�4D��|Mhk�%���I�pA�� ��S�>��]]Ti�H���,4;=��X�a�k���7��Y�A�ʌh�YwF�d��n2�ս2�o�}��ݩA�є3��Ӛh��Ua7��j��F-�Ys/4��������M���d���0{��H�΀��E��+i�����T�d/]��΅���:��H`�1�ё�����U�.��o�V�՚h���
LeAd`Y�5��)ӡ0)m���j~�8��W��A�My^���Y���<X{c�h�!֦tw:���v���v�̃%`<�a�'�����Ǌ=Ժ�I�FG�3�ʆEIC0���z�T��rj��$�A���zd?�m��u�����;�Uݢ�!�f��ѽ��X p�R녙�S����?P�k�j�f��-:|0��95�lw�]1�Q�!����}����gty7���m�<���1�ۜ]Z�Bs�h�.������@��[�Q��"�o�O`ٽ���y�v��f�ֱ�4���l��&aײ�T���І�V�2�c q8>���wt~���>���|��?�e	��*]���z�nY�Uy�̞��?��#��&qE�����X����=��2���FIC|5i�z�2y����~˵*��o�&�;�#��
Q|=�[��>�iRy��4S�|��MC¹���J��"X�i=�D+cx���l�q����Z�{�o�����ȌJlYIC���Jf�4k�j]���1m�/I�I��fC�{ֲG�lKw]oPv:t>�}�(�=�Bd:�y��kJ�ۻ���?��� -�rG���u{P8�	�KjxBP7=4�J�Vi�Al�\K�>y�L��y��@�a�	H����@�Ҝ�$Mjq�E�@\R$3�K���$��8��6�����&�J ���ڜA hX@�J/i�����F��@w��� 	��W��d_�p��dI�;�3_�h֦ڲ}�}�t���W���+�$e:����f��0�b�7%0xԱ�_����`^ղc9e�JjQ+|��Py5|l#�,���?rrZ`As+��4�܃ia�Q��G�VkT�OR�[<� ��_�~�oӋ�=[]��S7�����7o����}�zGΤ:tjm�
����m���$QJ�y=�M�^�x�Ar�>�PSm�����x}+`�=�o�VOS�!�n~`q��_=O��������x3� ݾ��T����6mw@�����DQ6� �f�Ki����u��d�Vfs�� ��`��YP?C`�L�} *ķ�G���hE��x�dQ7@-�%��!�/XJ��œ(�� ���}���zx"�e��y����7Z�}�-����1d%u�]����LҬI�	V۾<��F�\���b,�տ64(5Y%������+����y�(�X����([�c�&c�������W�<T=�@�7��V�&���uk�<�j�΀�8TH�����Nma�:	��w��P�uQ��Iz�b�v��#��`}��!~�/��'��0��JW�Lϳ�[#���%�j�!�0ʧ�O��%i�-���ĵ�<Ǡgѐvb��P����L�m�9w�A �2���������+Јa<'�m�!�,/�U��F�u���v1��O��zڱ:�Р'��o�M��4T������:�6���0��.
�x���������?�$.�4KR���`M,v�����r�M�P��RZ�' �������K7d���R֤W��.Z�tQ��e�Ч�O�b���s�b<���-�
�@���$^>ꮴ�Dv���{\ph�)�e��h���m���{��&B�\�g8U��и
�u*���l�Cu�ӉgᝰUo+���_�a (��7�0��r��ǭ`���Jɏ�������W+M+_�8�F0qF�]:jY~� b,��D�A5$\UF�Q���r���/�G�����o�ݹ:�*0�_�sx���D�U+��t��h)�`��Q��%�F:�!�XlR`��ל�]��A]����\�
����J@��#6��^x'�B5�PT�����Q�`)́���.]�QD�(�^��^�Ji�Q�Z�TM4SK��<���_ق܏S����I�vW����,�DS��hKܺ�n�*_8�j���<��.�<1{�&Ͼ�t̉E���a^��^��㯰�%u)��C��@��~g3��xS�����nߔT��9�$2�%xq�<�5���j*�����v��H����aխ$�!�,>L�q"k��'x���J�t	u��+E�?^�d��>xȯ���(����.B�
��Üh�8�E�^._�EaSE�߾.?�h���Zt�8xGJJC(=,���y�A�zL�����i���c���ɜ�qI�C������+E�\-w��*�Hm��w�\�cWF�Yx��4vH�B��Լ��O��	&��	<�@��.z.�($���X��Iy^FL���l`�J}��Zo..=p��r��m�:��X��Y�!��tw;��G�����~�rSBY�,�:��QU�Qt����
4DT�Uj�����p����K��L��j���G�~�U�H���-Y)�����P�N���J:}� IA_�����������+� �Ay�?�t�E�Wx�>��>�Y*s�E�e~��d���t��.�;�����Z��.t�Ѵ�h8�F�Y��a����
.'���e�����������%�c�*���u*X�w����1z���xO������b�����2����*xi��l	���էjVJ2�p���9@%��밋�P�5��b��CnJ���$�AKk v
���^/C��zx@�	��G��pI6�S���Z��54k�+ex�rt�U�m�|#
��t
�w��X�~�i�a��� V���S�3y	\Ep?56��6��>�����*R�z���8�]D3�,�^Q�V+�Cf�%��8Q�*Ȏ�VX�1�e�]��-��.�R]PxeR~h�R-T�4P~���xV��FJ�����֔�f���c���Z!Z��A+
�bJ�@C.�1Kn%�3�%7e�)���`�t�X]d�X�|��=`E>H���������2�e7�b���Ř%��8�aI�1��,�м3܍3����]�T�Q�]z	��Ij�#h��{R;�j¹Z�B�!�.�ef�P�~>�}�`!O�EOA�1��� ]�x�J��A�W��˺�M,*��ʦ�xh8M4����0.��:�[Ѧ��aD��oQΏA$YFR��g�/��W7�u�� �t-�`�2�� ��ЦKJqq�l��A�jF2�8��49CS��	�1MF�S}Fn��l�pgS���̇<E{R^�=h�L�n��RXV�n�!ZQ��*L�W��=�Z0�ʃ�Rꠣ�;u]w,��(����=�xhqu�<�2�K7�DWh�����Y�мØ�Pd�i�ᘠ����T~50^�2�!Q���T�愜�����ڴ��h�{&�5���h%�5.	��i= ԄH�Υ���ִ&Bj�����Y���;���N���m�촁_�ʸER�z�ow�d"��d�M����^�k�ۄִB�+��j8}��qa�A�eht���#��jJ�O�L��������3���p�x��:Җ��ʂns�?
4�ʒ��4����E(f;�Gn>�kB�8����/C[cU�%���I��ԫM|z�.�[�xp�@C�mi�|.	�~֮�Y.=!���W�0o,��-<�m��EnJ� �=�P����Z,�
)5�����I ˠ���|���+���tz	�Of���B�yN�$�ח��6������V�֡<�Od�g0���*N+���
��wtǻ9ݜ*_� �  aM�O�[����˫�A�Тq��l���к�z���e6�w��(��iC]�a�l�)�d�i�R�<�2C0h����f���=?t�剹z��w�!u��q~`�tC,�%�p@<�h'���hH5yn����\�[��q�w��ȡ�+���3ݚ�+��a�霁�<!zԴZz�$2��!�v�mc��tT��)�7Z)�����#��=na�ظ�'U!���.,$xnŐw��gt�5^�heP��$^��i�لj�?��n;2n-��\w���l�q�cw@C��0�(k����p
�7埗4<4
jf����c�i�!����ۧ~���#�&[�����;<��ۜ֊9���L�8E�_ў	�~�����bj���נ��3[��7\*e��ؚm`�CA�7J
��Uކ�}�F�N۱���ezM4vW�(6A�/�L.�t�����KB��K&�Q��a����DCm�:��7�rƓ���ǟ�[y��	װ�9�>��x(��DC��O7O��$��+G]˺��Ə��}���$�LG�œ9����SR�������6��S���рqS[����P�?����@�k�<�"C�,�"k!eSRb�+����ʖ��0�n-�
���J���w�d���ɧ��g�Fe���"�M�,�'�[V�&�:�6���`?�%kOn�@w��Hl��5���I�{(Q�d��Ӷ��^��E���u�Ⅻ���=��W����=�p���Ӑ���������uDڬ�h�4<��`�����Ę��{���<��>�Ö�ؠj�&��h���l�B�ܭ�1����࢝��b��Ѹvs��籩7�$�n�c/��dMm���YE��^��Ge^y����C�K�Ŏվ��j4QH���4���tG���; �yc�i�!`�4%Q�O��9�7?,^_�^�*���@֭�D� B���"�?��$����Mˎ�Iw?�>ƒ���TD`�tu)�j�t��Xp��������۴r�76l�4K�� :�|�D_�4~����ա��05�(�4|_�2�9�s�pF�2��~�aK��Y)޺���ZZ�d�FH��X�$��wq�]�Bм@�"��ڎy.�k��zJ~ox�Z�+i�Wn�.�d��U^,��د�F@�kʣ�$�+6�{X�o��|��˶XhqBkM4��w;y�~��v��z�f5�u[8À�}Ǝ��Y���g���b�
�>�XZѼG�-#��&��.��{��~F6�*T��5�e��ȟ���J�a��o�{�&��S�x孋b���#n�v������LIC�u;C�[�.�T&�<�q5��_��*|zf�T��ud��Y>����X�k��v���[`>�>�b�����O����KJ\6X������<zW��h�!	��m�:{Q���Is��������#� >:/@�*��߅w����?��OYA[�(��~�.V�h���R�Jx�	IX���#�,�`�<C�g�8��dE���#��ٻ����� >M�������u�@?`����.�����|'q(�X�r����L�_�����-̶xCF����ʯ`�U��z$�O�c��o��W��V8O�D*�x2�M�)�.��V��`n7�f��I�����r��~���Pb�w��
��jg=LH�+XICֳ����kL��<�6�:�а#`4��J�_(���=�1����('���j��-�D�!����.�c7�\�yX�I%�ПJ�$�r=�y ��Sd�;��4-:�yj^�`�|�^3݆��x�x
Z�85@	��3�ژ��e��蒆�:�p���y:���t�3���n�(K��|V������?�FY�B���e����q]Xܣ��j�sI�!p��hHp��y��G˔Hh`�����s��K8�Y�#R���љA6̯���4\�i,؎)&�����igv�C,J"�1R��C���66ʖ��o��F��ˈm�cLΗQoL��ߍn5
?��ބ�K�|��f	���,���i��|,�|���.���,DQ���N7�b
6�L7���$�TiYX���X�RϬ��`���{�{�����ӌK����~�;h6�?]z�_z�k��(j,��E�m���O������$8�X?`��c�6"�E��C�ڄ*������xb���J)`�hq�'�z����=�,��O��J�E�X��m���_?�����ݷ      `      x������ � �      @      x��]�vǱ}��b�$e���7��,�H#R�9��D�$� ������=3�i@�$8�M �����v�z�q�ĳ�%���e�3����y���q>�g�~�~��&*�'JM$+��q��
wtf"�D���Pp�����a`[���k��B�����o'�g��a�\~������'W�����	�:yAyx'�T������P�D�	�E�r����5f'�O�,� C /h�Q���y���3i��{��j�a����^܄�6E I :�=��Ptբ0`��z��m�$o��_�~�b�2Wg�'�e@��k͓��;�[�n�~~�nz�u��W�zM�����:�����^l��������_��զ^of�/շ�&����&�Bᓕ�;G���鍗Z[z�\kg�J3Ћ�-΋2��@/��C�Tl�YQ0�!cIc0J1����'�A��E �s\=H8})&\eC��ő�Z�$�0͊2��{��0,���6Z�Pp#ʆ��4~r�Xu��ϛj�@��g�n��?�]k%��ٟm��~��v8 �\���j�:�����R���ɺ��E�¿(^P��50��Vu�|��j��ԫ��,�y�����W���rO��5��I�h�UүSSm��o	".9 ����v*"ls�GjI2�HIr�u��/�4�Ie ��f��(m�l��(�}O@#݄��D���G̗���a�dȻl��m�[f�����~��~%rx;ݐIE#�Y�w��`����n%�9���d�������r���
�h�<'}g�߲�l1�K�4,�r��$ K�}[����q1�/��z���f��^<>T7����V��j��^�4d �P!�lj��mϬ�(8�(�.�.�g֚s�}`dU���#et:�������{u���۱lK��m=�&�q�����$�,ʰ`ĽZ=ٳ��v�G=��5�l};��N�+�{���+����j3�>(��'R�`K.Ҁ&�
�K�o�Op�Y<�W�I����Us#h������Y�z�����ۤ���߾hY�_���Į����o]o���rQ�5�GڋՋ�j>]l����[��$F�i��]��cO�>M�������aI��5~_U=�15B�W����� �f�R���������r�� �VI�i�Y%��aaOC�K�(Jy�ZɥvN�t�	�������-JR4ʋ2X"=�;�C��+G��&������F���Ñ��O[�����?ᚼ'���E�LQ��|3.L�5���J&������r��K�(��������6��h�v�$L#��@�"	��K�&Cp���ٟ��Ca���4hMeH�\��G�H�����Y
p趒"��őc�D�Be��]/��a�9R�'�2�@*!��axrvY�/���8r�ԆT��Ie��#��\w� hg�K8ʕNr`'7E�!���������5�9�����I8y����l[`fO�/�A�<!]/���=�o(��#[nkyB �F��]����!�N��4���3��\�,������4]IeX�F���>y'�!)@/� �#ǅ��:o���w�\6��g��5���A0��˧�M�fsJ���=LĀ��}QL�9�Ub�d�;09mT��0�9�DL��3�~b����4ELd�^@q;e \�T�<����(ka�����r��Myv�G/g�;���i�ww3d�yH[(�[��W���v�x�����
Hβ�B�R�J"W�/�z {J���L�%/!��q�,BS�lb����,�:״ ��MB�H���=�zd�2�:�R�0�^��Og��y��
��H���맺�h=�����nzY����Cc��2��`P��޶۰��s<?9�]~^-�YQ�l9��Ri64�%a�22X��K��Fr�Y����vY<�a���&8�V�
������Y�w�u��8�[P�)�U���W�/�����}��H��ҳ�J����b50m'2���F�%I>��4a���-�ɿZ3�+&Ze�^VV�7z�]�LdHױ�́��6]�fK�Ң��[9��T�2��):%��R�&S5ؑf܎$���{	d�\��z����>?���?��,�a�.�i;!�6�pӋ&��?;�.����d�t֕�^N��]uٔ춅����ۏ��ޅ>K��\#>�/UQ�`�qEz#�xj�/�`[e���e�թ-9�6���hW�DY���ݑ�E@!�5���~�b](�C;�b:���|�gHd�����﷘Z2��7>Ŕ�d+̉���p��~�g�%��tQ�% �1��j܉�3���d_�b��&�t<�o!��K�&Ԛɻ٢A�o���}Yc�ad����W/7迤��/����:�����K���]&ݴ���4��Y-���{u�PO�%�WzZ� �7"힡ao�F��Hɽ�Rt��Z�90i������OA(KG�R��Ǝ,]���;Yޟ��&J�P^*ʀ	�l7k09i�v7a���}��)����0YвGˌx�y�	pVKYc����û�U}�|�/7I�<��%��p��>X�Y�9�aQ�s{ ���Kj6���F�����a3������]�mP��C/��IN!���7�"݄1���;��L�47M-
��O1*� Chu�������2�3@J��
�0@���
��O.�2� �ڑ����V����,3�A�{�w	s'���A�����bL̨5щ%'%l[��������0�Jɜ/ʠ;��Q���Tp��c��z�K>���R���܁Dw�u��`1АoJ���lDv�vm��s0�����zz�Y�:Č�*�Il�1Z�r�����.D-߁F������w!� ���u��綵S���k��X2�F��-� d�L(Gh���K[����m��:W��ðC�4�N(5̊H7i-��ʍ�]gaBZ�n�a{4�9Q#LQ<�-wd��c-3�Id��rIR�����T"�:�anBԐ2�-�@���x{D.'�6��$2@[�㎥�P���E`��q��y(Js�MQ`�C6񒚢^���<��IeakE;j��,�9�؍��ح^��9�����Y$�����q>%vB4��5�==?y]/nc�6�P�����:�:��b�D,v�|�F��`�
�%�����i����:�ƺ��ϼ���$�E��*����<�KJ��&2� ��g�Z��Jw�r����߮������":S�<��ő:|�Y'B�l�T-�NU*�j@H��#K�$�c�(x{?vd)���L�u���=���=KQ��>-��t$B���t1�8���o��$�Le�A~]����RgZ�yyG�#KZm5�-�cPO�hq�+�,�Ir�}>[�e�������[����/�����v�S/�ʰv��7͈�ı�>�(#Jh��.��q�a�u�<�>����N������4n~Cn�������'�I֛��C�.��7h����vk|���$���[�ٗ����uwSŎڪ�n4�'a�	�׹PM�჉,��G(����6�3	���b�L2�TN=3܁�#��ErV����ɨ-V�<^^���Z��<�ӟ��M��O���"eEA���6�(�m�N�
�=n��\Ӥ��RY�!��@�i����K#��A$�u(�V�G�H�w�}��V��
��[J�59�+�e��q�4iL_����Z&蔙8�_S(�����a¾�ps\Y�*�ªVu��v�#������fE��]݆ĉ}�o|���u8`�Y�f����E{���85�l8�X�Z����8z��ea� v~`y�P�
�B`<=ِ��,?2Ɇk�<�JdX���"D7�g��D���mh%o��4��پ�2_���3/@T��h|���p�5% ��ի�Sܑ�ȧk��u�:wg��%���=�՝y������֫�ٺ�Bܱ��c�P�����6�/%HJyF@�I���S���y*z��Q�����?��f�KeH3}�¡��]�>�#���N>��ߓ@;���]o   #��,����KU�V�׹3.�'�[%MH̹��8�H]È�\~@\Ȧ��4SYP���7j����)�y�l�u5�Pmڔ�Y,��|�|Q�����pd|G�.)��24��B}*�@�|졘؀7ι���D0Wؾݢ��~�T��'�R�f��	x2=Ԕ�d��s!d��ʢ,�4�sm�#����Ɔ��ý�Y.����l#�NV�� �)�[d����aRY���i�K[��0֛_�W �^'h�FH9�7��&��M��lm�XQ��xGt��ؾ�PM�N�JcvZ
�8��SR+��3zv����_@�=�~�n{r�W�L�'030�p����GY@n�鷗�a��NPq�����○�	���˷�7���Ƿ7�?^��\���^��rqv^��*&�ësyIG6�4Lda5 �������ɣ�,oI�ƒ���~㥔�k"���,��R���2A���Mm�H+[�O]�"�kv�V��Pfb�x�,�X�GG�ÒB5c��ݸދR�P�1��J��O���$*����xM���)�����V}�̛��f�^���축S�����#�$���}�Wasd�>��E�9$�� ���6x\���cB����.N@�U/$B�B�x��-��%{�W�JaS�*4T�����vӨ�����dPzN��k <�ъ��|��$��6��&h����A���<���̎U�n��w�cu�۽,��1�T��8C���=��]7Y��1�7u=����r��6�2��m
ԫrC�qS/ֳ9ޞ-f�2�3��l���⽂�4:��$s7��S����l<ʫxIm.KK�C�I�`���"���j�,�o$7�!Cw>"�I2}�I*xo�Q�E�$7C6�٘��<x��/�DrT�x���3��ܦ��ls��\�ͯ;�V����7G��=P��z��!�Tց�@&���#�6�[��-��z;]ջVcc�>j,��2�2t"�@� H�\Lj�{��h�a���,}.I*�!�#G�ك*SY��A9w�T&}>J*8����8��đ��:r��Br���^"8@`j\u���(ǹ��ߔ�x+��yBU�6��b�N�k�d�wo[Yx|o`�Ǚ�B(�.5��Ő��oO?T��xq������7����W}j�.���L�!fbBS��`5�	��%�'�ߍ��kUO	s�?��� }`FQ�BRO#���Y��'���0],�yi!�;E�&D�.>��������0Rw�u~�-e�����JC�j�:��ޜ���ӷǮB}����d��B��~�뉐EY R�VʮBH���@�x�BM�oO��V�?h���3EYXhK�8BI��;!���;V�'�J�v �d�� l�T�T���t��[���C��-���:�:~9����/��)y���/o�?��N<�%M��6`�é�,�j9--�k�]�|����Wi�2��ãsdQ ��I������>���P�Cx�����ӛ��Czx�J���&��6_D�|L����0�֣��Xϑ�y�hT����d�(<�V��FG���׋˟�w�go..�Ы����7篠����N�%��va* |N��ǅ$ۢL�f`��9�R瞭���C�����>�E������`�o�8�lf~���QI"�A�z�+����P�7�cn�� �6���I�N��&��0�1Cނy�t�Ƒ��O*H�Rfo2��}mwu���P\顃T�����'R>]GOnO[㉌p��?��ӿ��F>      >   �  x��[]o�}�����!9��͖S7Hd���H� 8j"Ա�ȿ/9�����z'J�:�Q4g>�rxS>�t���_ξ}���7�?y�=��͏?^�����_nn�ur
�O����J��,��À�q(��C= ���w/N�"��g/n������ٷ����� kb�ޗ�f4G;P9$Z`10^bڀB�������=M��@x����� �a
]��V���;��O�8vڅ��g9���,=��Y/	�/�Ò3r���4g�9�c�T���o�ڒ%�5�<��x�lHe{�M|e��y�3������_����H�����#�+���z�HJ.��0���𱻻���r�<�v#�0M�Y�Y[�Y Hc{�Pۜ<i���0È�X�㲄}d%B�#�/!�I3d�F����)���PÊ5Rr1�*�+��A�:����D�x����H!�IO
��N�vճ�3z�fXE��6PUM0႓e��.f8E{p��S0�d���B��F[w�+��Ԙ�|�j�D`p��ޢ�������CQ� �uk>{�|A#��a��<Ĉ�|���+Ar1�(���N)����T�����+y���cΆ'�����1�A�E�˓��g?�Q��R����0C/�Cc^�!��ƢWr^+}���k�0��!R��a9#a��P��xH�b�O4��._%6���䞫�*Q<-�ʾ3FB�`��]s�}�P��ر�L�y6��Pg��4/�$����j]����a��M]�P�6��Y��w�GG�{x�����b�9䧋���Ul��j�M�htKa��[D��:�·�L�FMMW��<�Љn�1�R��Q��TC������U�]g�΁��mJrB�*��!*43|���`�
r��=~�`)����HUܗ*��R�~{�I�Z3[W�
[��b�S4+ng�R ��\���R�6]��YY����D�v<SO./�<=�����7�]<����۫�iq����If�qb*JC��8�|��L?DW�Q;�&��J���LP���.f����:���������.��������>ZC2���O���������~�ⅻ����wo����������/���槛�w?�߉-@���Cʀ�L>�gs�C*9r�VI�0�F%*3C��cb�ژ�����	����f��A�����h�6ShF�ͳcU&Gc�2�tɟ]�WO�:�y��ǿ�?�����7o��?����%���'/�*Q����-aX.��ǉE9r|��l&�d%s`	�Ñ]�q����U��B8��R��.���ey�������\��MD-��e��\+�� ��*�J1`i4Ri��bQ�b�$�J.����f*f!66�rmxc=�|��iY�/��I��rc9?n�A,�.J)��ʓQâ�XuЩ13��kӊ�MVϸ,���ݳ�|��i�P�L�����g���C�rh��6���&CI��[uj�7Gt1�)�*��ar%��U���W����T]�p���c)�sɞ��F3����lZ=_�8w��f� T65l.��%���b�_Y�mٰ�ͻ/��A|U�y2�n9by,lcO��$2w��- B\]�p�+����T��$vQ�;��������2v�"����g��äl�La�UN[ˁ�����^��znӘ���6�^�T��]O�&5�n�%��i�ԺM�T2UZ��mԣ�c���gK��,���o�=�6��y��3L��
3�-����u�8��N�k�0����{SeJ-��ZS�����b�Jֵ:�L����d� �f%˄g�"��C!8#�r�0ݱ"�T��m�)�sPE�\�P�`�A���o����0�&v�,-�G�.��7s��'\�H����]����"BX��M}L����0�o����q�7�����|���)��
b�CV1�	��4Ս�l:P�O{s��2�Q䊩cWL�ѕ�)M}̐�^1v��07u�`f����.�"�[q1�.z[���M*�f*+&պo�G�w���$;5f�DZ�G�G���u1�$�Zˀ��^�u�xj�B,O��"�u�v�-�==�f(.fE2k]��G�~~qq�\���{�B�����J:Y�}���G�_��>��Զ�q����7+�>f�D+۾V:;���%� 3,"H�wX��~K {���gf�D���Y�GՓ����hO�ɡG���o	�� )��0�*:�����ؤ���0�"����� -m���K�j%3|�A�>�K�"H�W�.�Y��AP:$G�gz�.f������4��x��L ������W!#)t13��߿0��X]�0%a�k��p�~[�X��z�טaCaKD���*1���a�L�ߚ&�$��ۙ����_���z{�����/7��isn����0p���V��nr��2v�03�",�jB��F)$��B�T�0CW�.�oPr�$���1�҄e?*���y)�-Z��%ۄ�؟	�X
�����ߛJk	���Y^9����OM&����Y�~<���b��aD�e�4f}�h�ґ<��Ǒ`/GN,�>fiD�`ߒ�4S�����%��T~�
����5f�D0`�#&����He�4f�D4`_4�P9n�\���^M[x�Y>Q���c�.�,Vj�f�	Y�fYEE`_E�Zs\�Ԯ��|�pAi��SJeC�{,F��՘����;>LM<xu-S����,�	I
ǣ�Ǵ-���4f�DGp_G"�]��W�~�јe)��DS�(%m.fiDJp]6�������;��Շ�w�^_߅�X�)h��˼���K�1����u	�u.��j+l]@��	�-i�E{�ˏ�I֘��$�,u0Q~wY6�>[ j��2H�WNf�aٛ	���,X�9�%Y�q�*Ss1�+����*�2�w���4fc�(� H�֩u��<a�QD�:�z��s��)!�\U/N {�HG�n��'GXvÉ+c���R�-J�U��bq��f��ӭ� jC�ƅrh�U�S�|ˆ�b�L4��C�U.��Z�����L�n*k�1�.22P4�K���"ӧ@�x5f	EEh,��aZ���X��RtHE,h��r����q��T\��Jо������S$ƹ�^{E�2)�&�w�j��E&u��,�X�w�M<}$��E=�҈�{�(�I��O.fiDVt	�pNlj2��"�Y���f��ʃX�1K#�9�'r�@mۧ�ʳ�*�Ԙe��Uֆ�峗�zqW���c�:P����#L��c�Co�듰I6E|��Z�@�5"Dt>�=ъ=k.f�Ct&��L�Q*� �tFG�Ll���e���B���|�|� Fn=Fnu���ToS��#�<o㥁[��T���eɉ��G��1F�W��,��O�7�$��,�j���sؤfE����Ŝ�Q��|�A?zj�R��Q�����xrwv[)���I� 	�\�7|3�*UUg���J3	E��n���ʌ�n��xvq�/��t�u��C��d_�������}!My����7�ꌒ�,��S�?M��I%���}��2�^�]�2�F�{�4۱�2���a�#�����k�P�!K=�l�e4#_K���������է�.{$᫗���#��e߄챤چZ���pA��c �*~��?������0�Tc^L{R��N��8��<�j�e[?Aa�%N�%U��zn�MJ�K�	�4"��>��s��d��i������=�^X      ,      x������ � �      -      x������ � �      8      x���[s�H�&����z�5��~�Ӓ)U�IR�!�-K�3��J 	4�,ί?�yD  򢬝�1����)9 �����v#d;�?�dU>���KR��,yMF�=
-ˏ/���;9�.W�r�덢0
}��ѥ,��M&���e����܏�������ҭ�����x)��9O_ƛ� �m�OԿ��*OƵ��1?\ԅ=����%�s�.��K�\Y���W��s�ӟ��\�V�|���[�'�s�UI~(.�����#�����F�����e�m�ʵ��x����FX�H6���|���l�l����0 ^����j��|�����}XM������h�?M��<�Ǜ�K��\{XV���߸�_������|P���kL��$.kt������s����#�0�%%&v7^��t��Vt���۬���,��9c˿��+' ��-b�������/��o.�C�����8�8�SZ��H�3�#�h�gy��x�Xn���O�B�qo�Yܴ.���Wh���.�Ǐ�ѻ��|t�5i�DgY�˵K_��2ݿ�E�`P.�,�{7�oޕ�b�-�[\��}�߄�|,/�Z͂/�i�wYR�au��1��_9��bzb1=ؽgb�d�;�8� pl�$��~_�u�O��xu9�x	�b/�����Q�}�Z�3,�I�vQo.��$^��u����}y��P�3	���m����-�N���a�o�seyC4�-&�ٖ���L,����!���A�N�9틁�L�dOo�L�����@@r��5�wz��쟳$�?���su��ԼΒ#�ǁ5��O���ާ�O��T���1m�:�%��R����y�ү�]��Ǆd����n|�N��g�H��$����_^��\y��f'���m)��9鋱��En�S�&mV�w���i{��(��б��ZQ>8?��ǤR��+.�O`�꼫�f�>��yK���FV��E�o7����$=�,b�i�B��ײ|��E]Y�޼!�聍�yVcըE�9�hm���n�ӻ������9����h��w��F��:����������q�@�I�j�l����
a��JB(W�,w>���dXd��
U�V�Z�g����J�κ~Ju�����S2
�]-��d�}�|=�����1���fȳ�����(�ǽݺ�n���;D�tØ�=�k6����0�.[�Pґ7ڂV��p�[���d/ot�Q��dĴ���M�׼nL;�C�sa
�[�4D�J2-o��uz��_h�Z�R��{W�HCCF4����|ER�tce>B�`��cN{���G�K�?T��\�Y�{�c�en4D�\�,��8TE^����6E�3]7WI˻�~K/N�:o��"�)/Қn$ޝ4��(Cg#�$W偕R��ݜ�c�¨�YR�M(of��*2�R�����d�5~(�Y&EY�����#ӕ�?��W�w�����#����V1�Ty�t�g{Vdš�������$�E�>�겱[�a�|�?��)!���J0���Bi���D	���xQVdn���c��m��0gaJ4�,'LA��Lϸ�-�)��d�MH6ԙq�6XB�v�VЎp>f������k~����v<���1��a~Ce,�e�"�m h9��\5 ��n�
A�Њ��Pt� ~�����Ȅ�!1d��[��vyG�o^{�紖9�L�Ȕ���1��1~��ig�d���璬�5k�3��h/�r��i`4���H�2�0f� TK�.��r�-���_G�@T���!�9"i�����R�5T����3ĺ�nI&wTtI;�p�&#)xl��c)l���J���^ ���d�ԇ�M��� ��嚬�:���7~n�O�i75�l[�22�l�&�tBwg0�7P&,��~�dQ,��(tm���4�cF6�V&r	��r�8���H�d��\\*��f�ҟ5����6�?���4�B�NO{>o���*�y���dK��^Xv)�[}j�H4��*��&V�ۭ�wœMz��r�h�� �GZR����F�����z���Rh��a`�X�d��.7�Hm��=@��`��i��B5$�h�6�4@rI,L+a��Q�X�&e3l���dX��7�l$�x���nSڐ�rX=��y��!��`��{Jqۆ�K�����!�(������D��Y�H��ȳȼ\�%���U�챾��ź���J�É���=�ž}�\B�uXKZ�u�t�J�݉����цuL��P�/yɺ�<�t�0�2�ǐP4�x`��Y�k�sa]
ȭ�/1634Y�c��οҊ9�3	����՝[Ͽ��!����
?}��j��ܘ�[�MF��4��sI�[(�P�R�å �K�M�Ճ���������h�3�g��&�	:�[���éJu�ʃ���5IB�&��I�/��39���7�A��ܘ�Urʋ��[�$H��+9�YF�	]��2���5������tუ���3
��#]J2��fcw{lY�7��k[�九����ൄ�p�ّ��7\���̒�^hw�SB�i�>^���*O" hf�)?�������Қ8:~�T��ZY�L�/C��#�KvrN�Gb��Xj�ʨX���OI�W�ʰ06[� �gl��츐.��kRFC��N�ey��H�?�m�+?��Ȅ�y�� 3P�M�R{�����)'5 4A��M���r.�5@�W�R�;���|�~*Χ�ġ�0/I��~jX
CQy�h'7V��-5���U���>Ҝe�6js�y��,�u2�)��y�	����d~ �F��~orh=�<b.������_9��mi�>8#�x��z>W������.�0�p�������*3����s7
��Q^��eS@�L&�P{$N����y���1�
�	ǲ�����3`��d��9WkH'��]��T��t->��[M�UΖ�$�k���i/��7��,V' ���<�3�g�,8Q�DyJc�l7ҜPį�	k��Y��(�G��T��I�F���E�S��T��n�s^f�ܴ������o�� WMG�Cyi�_͞c�r{�*ɿ��7^d�%Y��k��B���<�[�מg�v[�'��4%����#�.����C�c�Ǖz�jF��P�?�.2wH�^���"y����JzV������R�QWl7�y�����ǹ(�$_�E��p�f�jJL h�~�V$+��!'(NVϗ4?u7�.�M9IB� �H�!��T����yK����H�	C�d��4���va�����R����̅MGv�nD��/=�g@�]+�[ۃD!=��;oAs3�f�ɦ�����B���u�qK��b!��g�������7����D�Z��!慁��dXЊ9�-$ �E��T����P���n�?84ظ�B<���ߟ|M������H�a�ƜD�Y��;V�6�%u�'��]|ͬ��à�˱n�s����ǟ��ik��>y�YHk�U��y.HE��j����	):Q��Xɕ�|��!��K:)�a�]���\����1�w\;i����y�[������*a�ʊ�h�U�,��%
���Cg��d�vA��R���L*Bv9GaBz�8�F�G�M���ž�v�	���(3=���ܑk��4��@����91nCʋ�d��y�3i�$b���c�ؖ�/�*?`����j�#����e.򢔆J,�\dp�%�� �ݗq�$ׂ�b@�ĔB���ҏ�����#�Y��θ`|�a�KE��~�r���r]n�X�C4p湫2�V����O�I���a�I�=E8p�г�PD��U�%ݯ�$,>;A�����'Vsm���2��2=�4!m��1���t��x��+V�5D�`�^Ç#t	�Y��f%XŖ����<��Is��!��y�%�V	#�S\eX2Qع��2C�m'LZl�A�����r��D^n������K�z|�ĩ;�-4���iJJ�ǅ��e�E��e�00{]WNǇɇ��_������\������9�]�sBG�X�>c"�C���/�4�`��A��U���� �Dz�Ȱ|��6Q��<    �D�0G�3Rf"��0��L
�Y�������&���1�D��2� V>�|�!wɎ�esl���Fx�騤fr��E��y�
{r �y�7c�!+˺��!��A��k2޽r*ݑ��ȗ	���P��eX���{є���`yX��//��#/�Zh_W iEڰ��l������iԁ����W�]zI��6�I�-`lM��	R������ o�o#�w�F���ċ����dX��Fw-w�-[1���H-!�=�o���`���X����·����$���ٵ��t�I.��������۔8��;K�r�m˱;ve��_��
�8�����S���J�@i!��I%��F;����H��@l�6G�(�cZ�=�e9c3�w$�X+*MYn�B�����4���d<՞�Bf{s��5pC��c��Ċ=�O0��NVs�ӡ���^6�I7>Y�uDNGH���G��ޑ���KM��y�>�yU"
Y	Gb ������|���N�^:fۜ~�=�E�4�Ǳ`F�|������ RJ�Vq'd�~i�6�z,��T�&8���m��|�9���U�%��@��u߿��!� �I��Hr�jki�|[dE��#�8�(~���,�u�s�i���ҿs�����*�6��dfM�l#Uy+i��-�)����r���ܸ8Cq��
'"�Wv��p�n�x*6�s�b%	G.��IR�B�cY�ȫJ�;䚏i���⁣�����n���^�,3�C��� �x��u[���+ԇD�.uA{�ę�me������Yx��W֨"I~T��m�G`�c��~�O���ɾb/&�p��0�C��r�yU�bz�4"�2�Ȟ�G�R�W����[�j��[��:9���l��Nv�*�[K�·dpH蠟������h~G䐥iE��w;���+h1�����`�t�������F��a� �<e�ϓSv�Z�ǖ���7gR���e6��l?�G�P����>8ť)�`*W�k2� �T�Z� ?��?��,�·�����S��
���N]4~��,�2�_�;1�?D�| uy2��w��X�'���+酄vT>%�'��� �/vL�ھ50�����%i*y �-/p��v�2�!�o���6	U��9�O������݇���qD��߾��ӿ`�?��Y=���r~w=/n�٧[��l���~��H�,�2p��Y���,�f����H��؊����Վ�A֥��s �) z�f�'a��g~dǖg�3�����K��*Bv��+]y+���!_ߤ�Z�t���g�����Rb�|o���8Ji���͎�z/N��E��0��������ʹߜ��7���9��C��FY�`'�G�h{>$ʡ�>��Q��~��$0*!�g�jo$��\�t�tf0��N���� h����񛑡E:m�d]gpҟ��nLmBw��<���G��_�Ц3D?=	??���ݓYd�T���Qwgs���BВ���4G}�/)��5� ��\���a���؝�we�C4|0�'1�|����+�-���BY�i=�lXb��q����[��W%b����K������<��z{9Db�,�pE�4\�]�/�dEY%_���NȲ5�Qd�?�Wإ�z7E��ƫ��󎇓Du6<�"�C0OT?�f-ڱ�P�/�TF�O����r�zQ7��s֫rn�Ƀ`[B=V���_�-_�-2ݓZZ¹�5��D��D;s����b��qԋ:v����7*��sV�k�e{R�ε�s5��Y~H[w�
u���ǔ�HN[���29r��ͅ硢�O�y}U�Q��y���58`�;�U5����ڔ0h�'���~��ي<?�F���`���Ue�I�0h��(w�!� �Ɨ��Ё��LJ�d9FDN8�9!�w�V����a:],�&Ey�=�!��7sMi	���y�6T�9ܡ���i<�*�H��Uڧ"~.w������'X!i��h`3`��L.�]!$G���Į�N���0��Ec��Y^ܛ�5�M?�i2���U����-O�6XD�ǳY&�V���o\lr��X���8vڵP��grx��Y�5��}������8ʶ�+���� ~���p�o��E�ِ��M�Z5�X�LC�V� r������	�j��" ,���9�:e��hʑ��5�'����Ϳd�����=6<̀�����Nr��X_0*	��vϧ�J��0ӥ�]9��r�(5v�b�)9i����!�5�R*��HH��^]��:����;Q����R�.[�������.�c�憠�3{�D$� ���;�]Q6Ι�"����0�A&y'J:��P�*���}��RD0����8+&�&��t⍘`}�Z]�0�tٟ͠2�\Y���!�+6P���MĂs<��ŷiC�>��|��	�N�\x��m>�g	�81�ӭ�(t+%�����?2kmng�8M4D�����[p��܉k�d�^�\�D�~f�ciU.s'<F!}��n��`��r�r�5:���W
�"�Vاe'X��,���R�wJCg)�ZYw��w@$]X̇L��3�h�_���J��~��7g��0g0���U"1��,�X���V&����]s����IjOoTǜ+Da��F���j�;��ON(�%K�a�O6��,�Q�m~<�uq��S�TҴ�%��|�Y�y�{�:�ȱ����`�3�M�٘�ۉ7��λݥ��%��ݦ�q�<�`h>Ad[��^SҝGx1��q'���rD�����8,v�ÿ^����z�W�aEB�AzS���5�9��t5��W�aX���D��P8�d7���5J�nm� ���!S�x�i�i�|g�8~�t�uy�)6_�:�%��/Y�67�����Fp��G����e���}��Y�̜ 4�F�L��ZG�����J_���)�nd=���t�����~.{��C<��taܹH�u���#��S�#xo�g��� 
$RJ��,�5�:��B+q�6�гB��0A?v�Mn��������1���3 /��]�Mv0���J9nd�'�Y^���� �g[!O���5ӷ]��T�C�g�:����!^� M����}��fD���H�~O� ��`���=j&��$�h�F��f�!�רi2{��s� ���X�����{N+��y�F������-��W�%0~���ie��#�|�!9�7��M��1��hZ|@�@�xWg�2φ�v��姄�F��"�ls�"��
2�������X\:uӼ���^R=y���1jvΊ36�%�����e~��|̏�,7(d�p�@�1MP痂�����׃j4���@"��gXp�`ssu�[tw�KG���9��!���$�7$t<��������&�%K�gsy&����M��^͏�K��M�x��3h�Y�b��*�$y�2���$�g,v�����E����r�4��U�-�^��e�I���,0�2<��7�$ՓQ��I�*'򇢬4��ě�s��o��S�������D���KU��C3�<��Y*�8�h���6/Ͷ^�ؗf���?b�_�xC��B�oM��ڷ����ei�d&�j��-L���ȸ�_e��|�qF�BN5���K���r��C�*����?~
+�6�ADeF�m�EY5��|z�'���L�N�I���J"I�۪<��"������;g��'t�E!.�Jt3����0K@���J�KU@�@V>~����{�VM�)�����7���,;->�P�	�8�6�\�-�d&�n��4�z�t����Y�]ّ��[8�*�~M3�:y���a+p](!k#P%��F��bZ�]���>�ЩY�I(����<8�B#���%m�}^fG��BT����59�?�#�P�;D��|B�)Ȧ�@r��":�aW�q�n��̋˳hKI_�!٦����F��|������}#��ֳ��_ ��,�Y%Z5��2=�u��u��NC앳��������5?��A$��sLo'Br`|?����Խ�D��/�_���g=    �Iw��o*KtO������
�(���`�w�w���p��P��RR�p<��ek��K���G�c0d5K�CRm�{��\'���ڣʅ(��k��M��s�Rm�X���$��y )�}�?V4U��9�ۄ׏`�9��Oi�����\����&���F���X1.k�M����q8dk��{�� g>ae�\��Tx��&P7����m��xD�'���hrh��=��n�n��B�=���*̊S�l�Iݥ��N��]~2���9�F�&V�I����ʿ���������h:��0T ��6�#�o¾at!�m�C��T�ŋ����O�ʵ�a�sn	�w�A�G�@Ā���j)Au���9n>pC!{WP�+���6nQ���;��f[Sd٤�S���/�Gƶ/MK�t ��Q���*h)rKmˍ�8�?�Hh��/#�7G�D�v����l�$�Q*��$����+���Wi4�< Vdɗ�34tQMɼ���E�$ڥ~�Et��[Ra��/�ZR�NZ7!3hÐ)���:����p�O��`�.��%�>��٢�Yw�8̎G�~�Yw�*��l���ha�b���7u\�Ѳ���e&i�Y����I_�G�N�#K$&Zh8�<��������|�3�Q���+R{���#�$]#z���� %�kT�u��\���D�ʦt��%�}��;y�$�4�`7J'��?���O25z�l t;cW�0���('F�q�Wj�Pdn˪s�:�m��_��c�:a�(�`��2��r�ã�َ<;��!{@�y�����uC�4I��z�ێ����y�o�cL�#���^���;5������u۶��,u��V4�8(R%���P}k-���$r;�"��&=U\hs�͏��s=ä��m�i"ib�\xU�{�H���*�{D���.�z��Gm޻�/[?
T��K~8�څ�خ:�o��L!��n7.:춥��7��0_�����ֺ�w��DO�d��b��dG�a^�%��!D!��������Q��S�ѝ𧛛�8�݀48	>R]�7ɾV�'�ت7�,��ʄb�����ص�7�2��?D2����"�ɸ}�WN��nہ���ܳ�m�@R���B��|��ZOX�V�q��>�����v�&u�o�]3���E�9m-{�Fs� �dT�=Vc۬�骤;�^��P;�Q?�A�mi�|��iR�I�u�����eM��?�h�����P�'tv��ؑ*��H�
���f�\��C��gI8,A#�u&�����l{S$[�<\H�d���4���u�$��6�=R�x���{��>)Q1�8�@q����UƖ��'.%l��)�=m�A��m�Ue��5��)���չ0jj�.�T���O�l�b��E��5 qRQD��ne]�6	�Wq�V�]�w8ˬM�f���F����uL8�FGڀ��N<��r�Z'7-is�o����zʺ��z��/�<����>����P���v��V�f���O���?cѕe�z�U�0�tC��2���$L��4 ����u�׃��w���O���t����M�O�E�Q���و�A�~��u��}���m�QX��ʰ�֦<fyw��ZT���O%%|�O�x��y��A�81%M��N;:�I�09 4�2���d*���5��7�I���%���F"� =�<|�廞��N���Kv�JKq�PWz|L=ڢ�w]ɰ��qA���:��sѵ���9W���Iq�Lx�jpUr�~�����OaƵ49�~�'57���;�E�w�+��
��U ��~�7{��D�x:�ei�Wz(�/�I���#�d6�FY{�w�CƖPm(�IM��P݉J.�z�@S����6�D�D5���͸䈓�(�l�0��tni�TܜVeS4���m!�Z\�]��=}#Jz��N4\��ЏG��n[f�ʻ^�-�~�ՙWE�;g�~�l��t�Ew���B�����E��6iwqL��ss��ˑ��Ti�&����-��[���40==�E�ڸ˧�{�k*h���e��"��^�j�nE��>�G2���) �o8�[�47���/`���I+�����k�6$*Fh�T[%�ZQ�;�'O��E�ɰ�����34���:ގ37{4�=��}�J�uY��֞�Z%�kL���ғ��1BΊ��ܦ����e�י!h�x9|=˔�n�|�������_L���j���k�C4� �85����$����������1i�
r��!��r����ö}C���ϓ���01-���d�tbNĲ3�{�fb�kh���yҍ<O����4����S;\��{z��F�i���������\u��M{V(�vhB�������I'��01������$��=[��Vn��C4|+��n\����_����;�6�����.fÖ>�����D��x���yx��~Q��	F��+M���-����m>��t���3U�U�ƙ�k`�����(�w;讓-���g���}�g� [�M�C4��e"`�d���� D��m�����{��/�F�=.i��`��+%x��n��[|�>�F7w����	�*�sj1i�-'���jD�����zH[���h��#��hbeM7�����4p��O��	��,��XSե���|k^Ȗ���-�"!������J���� �C�9�g�6M��k������T'���i4|j�O�����)����ܲ\9�k�V�(������N�"��ާ����8�D7��B���Q �� C笐��������P�ܮ��%=�;�A� ���h����,���M��D���j�=��s}R�_����_���Sg�J�����E���/v�J��bt����m0��/�[e�DTy~�I~(�ŹSݪp�j�^����h�b���ڏuy�ks|s���](5����,���br��R>�,���p(s#UB2�7��7�RESڙw_�����ˤ�����{�g�^��h���ov��ݭM��Se�w:�4�8�ۉ�����R��F�������dz�Zg�CӒ�W��C�t�wO�\D��(�h�˫�2~��CY^>�TI��7�����L���˿�3��Ԛ愭�U�S`��h���=�P�Y�w9'��yf�*�z�h{�_O:��YL�v�Y+��?�T��O�7��zb45Y�Xm1���A��6��=.l���"7Y!�V���~�.�9�8��"��ѷJ�C��R�;�q�*�l���	J���R�Jq�r�_�����k���g>4=���[�fS�_�	qLh�7��h�	X���-�J���H�CB����N���D�W�Ɵ�L��w%�\����5�%:M8)��Sd�&?4���4/���iU��\�OٳF�5���
d��a��\4_'��ϙ|�<̦�*I�`�ڪ-|%VK�� B�3��u��y�O韗Åk�Ҍ:�"�,-,Gr�c�ӄ��{�ZN���r�6�\AζV��8'|m��'���u1���������H����_�DWR��/�=�sn�s�n��P�7��3y9��T^�8QZ��^0j�\�;`�O�{�B��?^*���'+>+Qu"Ey�AN^su�����e�������V�������:�w���2�C{�x�\�}��A��η��^H[��8L�G�5,��6��С�~����S�w�l�u�=��b9����H�VϢ�B�U�ߒ���:-�Yj4�ޤ���_��\��GC4LJy@�dV�'�TyiKF�,9�Ҫ�}�ˣ���d�Cj%�ʚ$ں<���My�
ː���/	��&ݫ�Ho�ਠM&Zo*��D��f(C�j_���J���1A����e���';j40Hʱ�n���l�	�ґ/��.z�����0�����H�F��8􆘌#Y���'>��d�Ѻ�ڒ�v�lC����	�9$�-�e@���c?���{�%�
~�xE��ݎ����t����1�6ӇQ �o\t���3Vӻ�t�8��t7^�N׳O�9b���	=7FMh�w�),�����?U �  =���}��H��9��Z�ֶ<`�dT#7Tl4tb;����.&���=d ���'���Ao�ٌON@I�&�i��n'F�O��לn&&�_��j�X���'�4=H��?I�%_D6o��S�k��.�q��u�M5	����#H��Iߐ���О8���7Zڋ��hE:C4�}u^��t-�H���-�$ԁF�Y/eQ�9�(ދ� ��hP�zk�dZ1�g8�H-�5����_�����q\�u����aM͵*E�P��x�	{�|�5�)7��)��`��[C40��<|x�9!wz�0���U*ezݏ�n��0Z�]����WiK�A��#�@^�S)��HG��ۡ���}���Ҷs� �;?�����o��%�G�ĦթY����:/��=J�Ni.w��G(��cW�G���c��̇~Le?��g���L�2fu66/�B�+�,Ts�u�A�/��$E�P�Vm����;'�wP\�#D���:>����D���+�|����ֿ��y�|.���y1��_٤T��h���;�0@��{����ERXV0��w�%��rǻU������LP���Ƀ$4X��t��I���&A��#|S-�z�s�G'v�	o�z��ۖ�k��j4�Ϻ#}ҏ%Na�v�/�2]?��^��?���F����p�rPn�ĉ2Rb&�*�ZÑ�M���}O2@ճ<�h���4?�
R��m�J�Y�++�J�	&���t�Ү��z=�C��{�C�ṓEZa�?}ˤ��W�3�'�'���>�aZ�f����X�ش�N���"1��3��L�ٍrGO��&A*o:��(�}���_�x[7����'�p�!�h����'"��\Rv�;�ӎ��4x���7�c�-��XV��t ���h4�虢eo�+�:�ka�W_�Ie�F�g�z�1q��QD�O��sz�r��!x�W"DI��o�\9�����m+�\�!�/����8;M	e9��BM����z�+ �l �䷎	��ّ��Z��}q�zJ�� ��Q\��V��H����@�ko�_>(���~�U�G��dG�R>��N};��v���3Q:/�،n��2(_6����0���\+�Z�C{4|�z����q��Poܠ����#"������s�"T��Yq�7�E�tݞ�\�lZ�1��{���BB���P���o�-2�Oy�Zq�v���gY����9��η�2:�2 w]	8�:Y6x�E�!!��a�U���g��!x	t��&���dU՟᰹�w;�Q(5��1�{�N�A=��gEn���Ÿր�#�G+���pC�ټ���6��� ����Z�u�9�*�������~�M�+ky2��ƀ��
'S���w�F�3_�^51'^d$�4��HG�v�(����v�Mcw���!��b�K���J9㠷d������J`�k{����M��vif�\�������W����'��t�uw��k^�Iכ#~�sEl@���J���/����#��w�����wni�=�"y�.���AҔU*N&ui������� 3 �h�W0�\B��?8uܐ�-8q����e��f��ƅE^��K^p<ߥ���N��2L��r�W�T�<����]�5Z>��f#�R�;D#��|mו��!+�S��PbAc Z-Gno"�M��Vk;a0(��9�&��������,��4�	V��N �V�"]�l��L����ĉ.����n��}��)E���to�+*`�!�
D%�ӝ�˱�D�EGd[��_�C�A��"�JC����Ulľw��/�wOA��-��e�N�8&+U���%I��r5I?c�p�2ݣ���'�N���ߎ7��7����D�ѵ̍-��d������i�yݳ{9p�g�k��h�Z�W��lz7�jC+�Y�عy����I�z��]��F�I���c�'Kd��'n�y���@�?K�g���mR6~cy=��A�ˈ�觰�z������)$��Nh]�:����S^�������4�xG�����-�we%�T���7��cj ���*�V��Q�����u3�w4P�����"Ɖzŏ���Q�Ŵ%g=�4^�p��^9'����)�D����h� �:i�i�R�Q�HRl9���:�y&�Rb>2T܆��п>�{u����dE�Z�^��$M3p��4�2�28I��¸IS>o���Kt��5/���� �g|jC,'���C4�PK�;y�����<q(�;�-�ǟ����x'�q�h0fq�V��޷Wi�r�Յt�)�OP	�669�}'S�!�:�pM����k���暣�u��q9������M��WI7�p.����f��Ys�������s�p&�L"�>���/ȴ;��^��'|��n6��y:x�x�F��_�]l���w�b�������������O��Ow�����ӻOt���S�o�����=E4���Gz�k<M���7��>=ΕvB�X;����^;����VU�W]1�:v��a.��y��&�z�r�Ιh�!��(�+�`��<&H=��؇7b�a�>���n�	e����Q��V�&���iҎ	WHӾ;h��!�~nBHmz�Ll��Ȫ䕽�m�ꇮ��]$2u�!80%Oڥ/�Q;�	��A�UJ֌3p��:�9�$L��q�^y���<��+a��@2tb�7���y���i+�L2���&�4^:�o�#��Ӣ��sȑ�"���}?�v}?�F�đЮ<�w�̷�:W~��W�� ,�k˒�Њo0δd}Q6)8�I�-�6an~�i@<0��ڱ����ҟGFF�w�]����Ξ�+H��e@Ediq����j~;��)�"�<d�?�C�е,X���O�n����v<�t�����^�7�ۛ������?�}�6wlz�X
$���ܶ��?�F���)k#ف[Ǣ-\��]������t��vN�	���m?��nGJd7�����݇��n�����������	0~�~V������IY��6��f�n��9&ẅm�GRnk���|a<�u}��vo\��d�|�Rx
�o���{��mS̅�Z���)�=9ŋ����D���(�~x����g��K����-z��Vw~K1�������B0x�f����O����R�=���~^ӶSaN�Z����.2��T�����*d�^���0� ���x������-r=]��ȳ=�ݞ ���P�����C���<����fqsG����>4��d ۺD^�7��sH��t5o���������|�0_�&�5�0�?���h�%���۩��[6��O����O;��a9 ��d��~��/6��u�c�����=I�钳X	�p9���Bg�O^��0j��~OMF���~��
 ��|�8�yj��~�<Ѓ�w\O?�ib��6�hA����7�j�o,m>-����Y��n�;O7�f���+�T��;9-/�3WB,]ɺ���a%����)���c��l�p�)��$�4�6����#���/�AJ��A�5%��4[�6"���w�v}?bK�5�yM�~���s��P����;��f�ǒ֔�8�0�͗����ďe�x��K�����Ï�"� ?���HK7
���F<��C�D2BE�q�LC��;��	���ݵy����b���\j�w�Ϧ��}�һ�ت�aAz@�2U����E��x��㓃�2���g>�E҈�H^f����t.�(���༐�ir��_h�k<E�B���-2�?5"��'�7apMW���u#�52�S��z���^��*i����[�cgYˑ�-��0Cpn�����W���2�Y��hi4{<*����C��و�5Dk�y	��eF[�����I��K%"�ۃ^ B@@oC��)�z��dJ�a�eo6��Vr���x�0�2�>ds{�b��������ez;��H��y�&Ʒb��|����,�c*��uX��N߰���o��4�h��"y�o����7�3D�������o�?-�ͥ      H      x������ � �      J      x������ � �      2      x������ � �      L      x������ � �      N      x������ � �      B   �	  x���O�E���O1�Þ�W���nk�%v�� ���} ��Ƌ�NlBb�5��f�WYY�""���"�z�����~:}����o~��������w?}�����)6�P���z���s��X�c�o�.�w��X.�����z対]��C�m��Z�r5���ԲQ�"-5�fP��t��7_o�u#Ơ��5 Y�{�uK}�ԄZA���6�ɍ�Rd�����]&p�	���>5�S8MD��OXjB��dq"�l���0D��{D
��l�i8|�ߞ%r�Rn�/���v���,���0$��R~"g�+"��>b�,<Eэ�[.[lKX���`�v�eYj��X�|؄����R�"g�*Bn8��&X�����ah��Quc����R#g�&��,\�6�-{0n��ƶ��Ԁ���\U�l�.5`�0vW�9�����:̙��:�����3�Qbm14�p;��iJ�i�Fcgp55��)/5�Cp;�!��!��Ԁ�Ò3�*"֍�Rcg�QK%<�vh��Üul �	�`U.KN�58�%��R.K��vTX��X�,9���(
�y�,\�܏�b\j��e�i^EHZ�#vh��e�iޮ�k���a} �%_��5Z�ZX�!���,ȶuVv�>�K1�,�}v �늨,5`�������� ���o��`H�%V�RSޜOr,A�MV�M�%�g>�,n1ۖ�j�"UdM�/�WO?̷I����K��[O�\�Y.F1Y�%Zj��r����Tj�dZ�'e3Z���%5�����0�<*ӢYXDEq�vT�%[�,�X����fV�VF,N+BZݛ�X[��% �'�,5`���F��l��p\�եAv?�j��$�m�Q1m~0�0I�ե��i!d5l���T�1/5`����YKק-=�ڮe$M¾���R������Q{Fޫ�D�&��ՁՀ���3S�}_�&z��U���i�f��U��!���RޫN�d���n4`����@���RޫΚ���I�h�$���^�ךc�8�,ⶹ�0�4��o>4`��`�ȴԀE�6w����f�h�"n��e#��v�j�"n�;n%� ��Rqۜ�]X�ץ,�9�������԰3��mN;��8���4����5��ۯ^�9V�K�HT+Ӣ}�urH����*(��E �R���b��oyZfC�j��.\v� P�;�Z*�)7��s�``ly�)W��ν��1}f5��ח&���<M�\�Ehl�N;4VSnח(vF��TV�RIw�ھ�����<�*��Ud��̍c��>�ՀE&�����������p��7���~������|�^}+���S��=��ȫr�U�$�V��?�q�����������s�ޒ��k˿(�������%�c�������;�8�F�]��tg���8F��;K�w����(,�]PD´�3>EE�N��Z��,���
Ž4�uXXI�|) hZ:YX���K�;BZ��ԀEfvP ]�&�2�рEb΄Y٦�ԀE^i7�������j]rz1�8]�'&�������_����j�"mK��?܎�9t������-��؁
i�i׹�-%�dw\��g�[?5O�o�z.�Ͽy����Ӽin��FO'�u{�F���T��q
�K|Ф�I%�;{�ۓ1G�ٝ]b�ݒ��t.�^�GjH�τ�d�)�%:�2���\$�ɚ��쾆Ք��<NL�h�E���֏��3�L��r�Bb���κ�$�.5�0�Lt�����_楦\�=:����[>����`��C'� 7�r�8NC򾚳=�є���_l>��mQ�a�-<\�L�?���,�T9�U�L�>H�2,�<�38T�O�����?�no:j�kӹe�Z�j	k�kCO|����Tf/�j:N� �٢�H͞%��r�谴�<���A�/ώB	�̓G�JxX+M/�|@�o�_�W:�6K�S(tYx��������� c�֪F�"o8�XE��Ք���<58ZX��7���v#�A6�r5�7��c�5�^��6��Bv�l5�����X%�I�))��U]�h�8ޡ))�y�kg���1�ruCǿ�"���>�)�v��<� �).v�颴Bc>��ra>��[H��M����p����`H��m��� �t��Nv#�jʅ;��#U�En5��4����VӣƘ����(/5�b$(0<W���F�{�X���1��h�-@�'x��\���n��������)��r��1�7���<5�FӋ!_e����Pu�)�*�O4�V(��)�E���0�"���Ʋ�v*��Ϟ��\����޳؟������i5�Қ�$�0P�=c5�"k9����gl�\�a�0���;e�)nu]��;r�&�w�~���� Mڍ      F      x������ � �      D      x������ � �      \      x������ � �      X      x������ � �      <   �
  x��Z�n�}��b0�v�k��7�4��D�B�>,�}0a��c����S���-����Ru�Bv��M��积��w�W?�_�߾{sx��B@4��M���錋�Mzm�Τ��9F�ph�������?}�x�ߞ��9$#��8|�ǟ�c�����`vve�<8�6y4�q;3�.�>�LD`�A�Y�.�d�-�<;�1"( �*Gk44�4okU�h�x��D���v]�����^2��f�U<�'�l�$ƙL�a`�Ym2��������!�ە�d��b`�g��[��4�0�I�� ˺0dpDf�T�h�0�)?�l���^�-R�٫��%z�F�� pc�&�\i�A``�5��=ӛ6X�4?Ǥb`�U�;��fcUA3��v,�F��%^�o���q�A����4�N
�Q����6��>M2!��0l2���`�Iz�̛US�r���Z���<��:�3��e���x��)�<�d�WLa��U10AGS9�4���F����OO3��b`@|M+=u�3�r(&GT�Ψ���(��>��>\����V�5}��<��mU�����p�pwu����§(-F	L_+�uƤ�����`OM��9Ŗ}_��8;�b� w����4ȄKc���"������J��9��f*�k�|�;.�޷v�V�9��٘.T�(t����o��?����_w_>=}�����˿>~{�5:D�۝�;\��������i�6@U��bpX,>���q�\��&���H'���<N�ʆt2���*D�4��x����!��R{,"�rI����2�J�uٌW���R"��i����c�=���,UU��^�F�g�Y	(QǬbh�`?���R�z�b`�-����K})Sb�r�X�su�\�İ�9�����I��=�nn1���������J�ݖ_��að�0n�C�S10 `7�v2��mS��~a���0)���Yb @8����[Ai�偑�F
*.��DPa�LS1 ��i� �W1��RH�J&����Yr%��Nl�*�� ��*�l��%T�V�@��j�p�?5�#\=��a��YI(��֮b�*�İ��G�T�#�U5��K�~C4|Ä���kV��2s-Av�(O=*Fa�����ۧ?v���{������Ͽ~�����1:� �8H�=A�X>7}���TH&��I��D"10@3�\!`塔�b� ���x<奴br�ə�τV�3!�wm�C&�?e�6roM&�ʈ+1ÿ�V�Uc��˂���G1{y8˘-1��y�~�8��g;���,���|%��G<���Z�P�������N�L5���YW˖�aM �A,������w"`���Nq~�T��nll4*�r:L�ǁ::|�tbx���W��������me����������lo���E�(1��_F'4�a��Q1��K<#jr/M�!0�@eT1�a+��q�pz.#�zUad���9�����T����F�[b�e�a/O7���0��Ϻ�_�=�q_Rǻ$�z�#WiS�K�����I�2�a�����eǰ`,��LH¹�zg��Ղ�m$��f�1*p���AL�E��ǉ���@f�X�W1��C� i|vA%e��9��W�z�W+��KK�1��nXl]�=�w��ϱZ.U�l���I2ގ��sKOnR�E����@6v(��TR�y@3��f�w�vx!��6���aq�Og�/����b�٠;N�Ս�~q e x}����x hɮ2�-��$�皐J�bLE�Q�O�E�*�w���ݐ��چ��RbL�ؼ������独:%�\ЊU;��4.�ؑ�qp6�U�ǁ��PI~�3��3@EnT�z.�:���*rv����Kp�:�Ֆ��I^�UwYI;��1����u���s��;�-�y�/�/-$�5C|ί��W�r�E\?�|ݻu_�cǄW:o8a�y�a���ř,��@^nXd��%���1T���U���b[���.}��0t�q���kLcw�����o���'����w��ealn�%�K��y�c-IթsA��p�dÔ�[�Q�VŘ����#%ru��H�y�$�V��\?r0��\PRw�a�Q5;���)>��+O ��C������\b� ��aV�M��T�������@�gX2�� ;?�����o�!�1t������#�3@aX���.2�>T���ٽ����T�(VG��W�q[L�.�?=ܾ�yws�����;D����9���ܬH�������7m����k�������*�_lŘ.�h[7Ԇ!�=ݪc��T��c?�!y>.1�t��q����S���1(&$=��P�c2�'l�925e����������ݴ�v1/ŝ,��Ac��;_�Lh��i\K\�I�i!�x��h�������~9h����$��Bj��\�h]��d�"�z
�*�A�������o9�M:c^�4n��Z�*��\�'wq|Ҵ�z�1��8��^f����	�V��A����qm��{Xv'�hƭ��	mO�LT��S�kH� �i���rN�9T� ���yx�r3�3@��G�g=<�(�mXo���~��P�4:�]��� \b���/�������      f      x������ � �      0      x������ � �      /      x������ � �      h      x������ � �      j      x������ � �      b      x������ � �      P      x������ � �      '   Q  x�u��� ��3a���ˤ����{�P�io?rט�nU�T���A�����c�.�������� �@��эϠz�~�c=P��45;#z�7����@�b9�$iF�%����/�ը�̫��{����Cb~��ѧ!����*�U&Rjͱ�i
9�-�*]�&ԂM=O�-d�uX��z@]4��t����@�R�>�#_���p�kaȍ��/y��v6
��υc����Qi����^Q|C�\��.�uj�"�}q������*T����̙n�NX���ܧ2����
�Z�����P���n�Ʌ�P�GQ(Y���Ҵ�� �Δ��&��t�ŧ�y�,lpR����җ�w`d����[��_��=�
�J�	rr�r��/��n���\i����iC-M�z���]�R���#����y.N�*�F�� 
Q+����\���_Z���1_��)	�l�^u��э9<Bޙ7`�(��!%)����Y�|?��6�k�Q}]�����J�bL����J�`�J�uK-r�Ww,��W��.������ַ%�_�#��  ev�      ^      x������ � �      d      x������ � �      *      x������ � �      R      x������ � �      +   �  x��TɎ�8=�_�c�����H��&e[�F�E��FKi/�����$�1	f���P���=�_ʺ�����㥖~�Y�:wm�ϑ�x3_f#0��ɓȏ4��P�u�=�»�8Ҧ;	8 ����Y���p���gM�<)@x���p��P�^��Yռ�[��ϒ�a/9$o�הQ��=����]�b*�봰'�Јp��07=��>�v{<�2�	0MP�����1�W�B_b�lpMn��s�����9d+������l ��{l�1)c]�*��l��t5�^gh���*ѐ]RF�T>��ѩ����jv���gLW���z򝋰[�ɯ��;�5��l�Nph�����-g`�H��}^.�1	���"|-fƀ�Y�q�0o;�}Z1�w%�cɵ�Y� ���w�
 ��H��-O'@W����g������9��h�����è�V��ϘA���b���F�����9Ӛ��د۝k�#ń%��/gۇ���V��.������`Y�`����.�n]�]�:��O$��I|3��&�.i�E�������`�]��E�H�M��U3��lo����#�,��H�@������������i園��È|�������'���O��D|���w�Z�p����L���?��c�W����w��w?�2m�ZWH���C9wU<8d��{�!�ڑ��TH�$4D�a��W�Ε`n|E����8��i<O��g      :      x��]�rG�}����L�����D����.Ҟ�z�d3F& �X��o����B5�I�l�(*EB8u�<y�ln��q�Č3��������͂$��V��_~?���y�n���~��or!��<� ]_����ο�n>\�����-�x���۲����U/�]0>g~)�R�\�ْ�RO�@�}�Nw��,G��/��w�'��=�7������� g����g��P�9��l)yK��P
�D)�������v��z�c2�)��8����\[z�0<Z��j�|K�h��	k*���7�
���ۑ����o����ç���;�~��l������f����ש��Rےzɀ^6���ѯf���� ~�-�i�.�m� ��z�Ef��/2���h�0<8H5gf�Ւ�� @��Z��ܾ��8���˾S�z!!	��XȀG�B2`T�hg�6/3�CH[�97|'�AI?B�1n)UKFi��am�Ծcɵ��Mcd�S�4�� M��I%�xh�$�|�]rْ�(��PI$�%~���M\&z3� M��Kn䰉َ}�K1���x��rg����F~���W���2�̰�LϜ��A	�R=��gh����Ԁ�����;�n�������"��ſH����u���U\���������ӷ�)�sAŠlK�i�)��A9��*z������7?'��r�1��a9������?~���#�����KZ���ҰH����wQ8$�mɠ9ppx��z�Z���~��d
%��s-*�4-�д����ӛC'F��4֔+���Y[�У,�2B�*��M�#�T���tdR��i�@�bC�
��Us��r�W�lf��.����JY+��9i���:t�"}�=�~�X
ے0(7���'� ����BB�%��h�Tu�Z+e]�W�;	��NK'��8Ȃ�@9� ���	��L�^*�h����(v��LN�� T��J����&@b:�����^.��-�T�&���[�Kk�U�N�y�I��\㱕&c��a�@Aky��~�J3�;(\�R�%�N�I�my�Pq���Z�{�a4f��؎F�m�V-6�im�4��;~��[O�|�-�VD����y!�䋂��d�l��`jyo�����O��������E��;Z���
$D��&[2@ú"�t���d�B�|w��+c�{��ń�mC��<8ےa
9~��CB��33QL���������W��b6
s&�f'�5�$�^�T�I���+����%:Bv����fEJ�䑧��C���\�����ic��!�HW����7�:�gdj��ɴ��6:?�y�V�FY��n=W�w�Ao�b�3I��%j6�NQ�èI�y�r��)]���V�4����O���T�;?ɀ�&�.oS��o�6��d������QJN����,J��8��~��n���P7v���Y*��r�);,.��a�H�?u��>��VҴu������nʀ��X��}a]���s�C�C��Wg�����Ow�߶�w��[h�o6�n�����.y�;�Ի�*P�0Q<&Tz[`D��ޓמ�1��3� ��v< %gd��vٲ㳦1�\	E���v��v��A�i˴<��9�<c�a��#�"��˖� �Amz��"�d��}�x�i��w�H[x�|v.���H6����I3"<i���8eN̽rK�[2�	8�,X���-�$�::��W�A�zJmP!��֔;�9���r�08m/�gc'Y��d�'$� wN���]g��˶9��$= ]0�HS�9s�&O�&�X�� �T�*d멐攩�F�܂_��9!����I����D��0q2,��.2L(!���~�*��6��8㇈��w*��"�G2#����K
$Y��2©�0tvh���3�����x���d��zW��B�5�G '[�=�l� ,���j��z����[���~�%�x�q���,��#�*���%C>D���^S98�m�D�ZI��*�C��0LEot�p���;[ؿ�WD�� F��=4�䈎�)&����|��j`GR�|
<Qpxj��C3b��4�}_K�X}|�k承 �"�l|"���0gL
�t�QD�|��msK�����\��������.�¸��1�����=7\;rBT�)��+�7U��T!�ޓ"|��+�v̑�"@��aR��B�s�DZ�gۚ���CT� �Bq��K{����_.�����'�d��+��w�A�����g���<�("���yI&�L���"O���f4�V&N���43��>ƪ��0�T�$�Nv���0K����gM�fJfZ�[�xPm��p�r�g�/���f�[K�0�O^�Rw� �yk�ؑ�����v84G��2*5��fׄW�c��sL"�;��@:V�?/�j#)#�G)���d�Z2��Jբa����Ъ+&���$}������z;�X��5�b���%D�\W�Y'�8xѨ͹���?��r��x�&�J���0�����r�.��%���iو^̄���2R?������1/jt�,�p䝅�ѓ����� �	����o�/���buI�_�}M����PZ�.����w׿�����ίo��c�!����߭��̿�w�1�!��7����x�?W��1ޞ�����������5��%���e`c�T'�Ȭ�O��WZ���|w���`�_ο��^��1ڂr�|Cs�x0��I�B�Z�*��Q�YR'�iW�sJt1/ɯ8J��S�����g2�o�c�q�c�R�_;������o>�;�:�y�y[�P���+�11
���U��K�Bf����~s��«Պ�6ϝ�L���������#~}}s=G�^�Į�*1��|� Z;��8N��N{��i��8�8��i�0	���m�-ި�����{: �_�HF�qT7^��'#��]L$/��_�c��Y�SIv]�n�>M�pߒa��KI�^+�"�)D݀1�!�����{��t6��'�2a<g��N���mK��G[���d+���8"pFJS�,�ĕa���9�	?%>*�CҾۿʢ�#��.�oɀTܴ�"�_Y�
G���n�Koj�Ʉ'�!��}��
�_Jג��v��I�?��[R\�okϓ=6ZT���\�����NTX����ϊtt�[2�
88i��u��ߪP�[y��W:V�:�T�#�)?i�s�Q"���6xVڛ� <�((��Ow�F��vC��7����|���r%T�$��Nh�n0�
\{�ƩS�Q-�LKFSb���n�ѝ���/�o!n�q��L��3�~�>pN �&���8s��{W�!��43��!��k���1_xi��O���J;�h��6����1E�i�!�i�ݼE;�����^ߍx(� NJ�x�T����;����	��Y�8}r���^'����vΈ;y���#�lt���ngPL�����}�T{頳��i7N�:ܶd��H�Zl��q�45)W2�͂�C�N�I+�&r�G�8�Bro�����0�|T.�l�0������)S���Te���b����7��4YrY�6�-���q%������y7K�h��
V��cu��j���U� Ѱz�2%WPB���&Yw��%�Q��������%�1���X�iAem�v���ke����s4��HIvx9��Q:^"N��=k���#��� �K:S�7
��Z����Չ;A�fA[俦΅���I�τ �%Z2��-){����8^�
xEgQJ����sZW�0o�i�/%�*4Y�n<T�0��d�rk� a�l��\��%���-s�3][e��s�n�M�*R�Z���M�pg�%{�BELF���R�>�]z_V��'C�ڍ���slY�Skݒ	X��n�Ww����4q�!����*Ɛ�~��f�&���C�Q�ے)�+.���ܮp�z��Q��0�ܪJ��"0�2�B���.�Nђ(ؖum�k��&m�\b�XD�=�b�����ax���ͭ�%��d[�e*zd��3|�ټG�6=�Ck:�O�TfEy��[$�Q{lB.��I��^�tBF.��g��V))��~W&S�p���<+���> U  �/�II��>�}~��<�1ARɦ��L���~S�8^��Zd��O�nrrY���=R�,��?��2��Ss%��d�	��z��3�f�&3C-爾�΋LmX]�iT�	r6G���>����ث�j#����(3'wم5������۩3e�����J�w��d �J�R�dsiI�U��g8�)Ӕ����	�k�$Y��:݁qڡ��'26�X�d��W�j$5;��Qk����q��d�����`�p�2��ֱ�ú��D��&KmZ2� �t]Eq^���*$H�؁t�JU�\���ӣ�39��O����-�L� ��Ս�#}go�q�+{�h]v�A���P�	�{x�z��{ae2@Os��&L������6�Hp�d���;�\��z'#*�hJ�^�0�L� ������oR��^�=�6�]Y�pCބqllҍ����5/rփxt�~�p!	-@�-n�ֶd� �ہ��g�Bh䛬�yA���X�z��3G��w��N����qO��`Aq|^�9�|G��U��w]j�[��=غ�H�-����Vg�6���7��������/V�X�ݵ�EJ=g&��.ْ��4R�nqR2���)�׬lQw4�0# /^e8��p�~\���>�B]����F��G]�mɞ�N����~ݭi)L:�^�z
!��ҠT�r�Mh5Ӎ��/��U~�\K� <>�����韹f=�iɀV��n�Ac�u2�.yb��œ_���x9y��f����%;,�śɀJ�����7r���Ǝ���K��]�]��!���'�����F�y�y*��p�SgǂJ�~�.f	��o� 5X��U"��ߟ�?�Ϭ�V�8�,o?��K->+i�L�g2���!��׵2��$ą]�̿]����[�x���`���z5f���Z��s����mg�w&L���Y�'&6�]��d@�Bu��c n��\я�&�2�hbM��!0�(��ڎ��"6�Wy9O&#D<���mysx]���H��>O`e2��@av�ŸX��?��RS$-��*K���\2���c\p*<YĜ3�	��k�`�dguq�1^
���t��.�E@����Z�p!yڅ��*���4>�j��M	��|Oy�����G2�]�ߜ=;�8O���0�8�4d2L������>�M�_R�d�8�,��#�E���}<��#���:^��2L"�%5�-��
J�p&�����_B����-P�k�f%�gd�D�tsӒ�;j7��S��Փ�
�Z7�x�g��̑�O�H��b!��>rb1Ȁ	Ă��S#]�ljhY5���@��]���J�/�S���뱖]�`��sܵd������0�Wq�h�--�ĽԁKS����║�㉑��9�'��f�[����P4=F*ǺxN�V��B�Đd�7�5�ƚfq#F����E�1�O��#��DP�Q�L��%��078�3�u?�t?a���������������&������W������f��z{���3���z�/h��C[�0�*U�u嬲m��/�=�w�\I�V�d�pn���95j�={fύ|c@���lL��<4�%���c�����- ��V��i��=;�}h���O8�U��E�\�Rhu.���to'��ɀ��|l��th��.jw����������y�:�ϒ�|�'B��jCX��O��t8��H�+He5_&L��&=�<u��Ɍ|�_%%�.7��wX�[Ќ�fZ��9aU͔�N/�YD���@&:���`}���ԊJy߻��}ھ���v='}4�\�g����뫱�1p配�Ӳ�ח{_U�Kڶ��4�T2-��[�e2̄��DH��ǌ�ǅ|�Uv�~�mɀ\(�����2�p~�a�u��L2B7z�v_:d2�	�VJ�؊Dz&b�>�܌��,mF�R�&�]z�k�Oõ���co?�<�?�.�<Nv�~�DD��2��}a@ٝ�>���b���ݐ����G�,Dd*=FK�* �8ux�-�|�DMA�0ՒaZxT��O��)(\%ml}^l�p� 2:<J�z�(�K���� 8�!��f��	N(�%�gϢ�Ā�#+,���l� k*@�L�d (C��L��W��F<䊍`�H�}m�ޱ����/'�
�8�Nz��Q~��y��L�)P�!�Ig�/U����{G��<7]�҇���I��ZV�����w��;8�$*�u�g���t����*�ڬ*�I��E�l&�9h�������R���ԗ�4.�+��h��T|�U��Ȏ�{��~蠶�(b?���z�r�o���2�}�#����:Ŭ�U��� S�g9��1���x�A�w2���l=�+�^�jd	�n���=��zj�}�����ǆ�"�3Ȁ�����==:r�����D|���oWԕi�SbR��Z���E��x҇�=��F�&�_��h�()�$b2�0҈�Tם8p�-.
K+F;L]`���Td2�C*�R�m^��9��d�������&G:*`��`u�ÅX��Ё"��+%� ��h��9-7����܅Njȃ��#E�S���9��@�d��g���B��ᯙ�B[˼��$��֪MŦ�֚����op��6�je�d�hP��(�OeZ��z���DQH����g-�S2{��I��o�"��O
�5��8������F�+Z�W'.� 4F��dM�!��M�Q���R;��}C�8�~���T�\��3�̨���r  z�dOq;��̳=�S�B�6tI���fNL���,����볋o�����Mh��'��A©_8�7P(���b;����+���=qՒ$�e�����'/G��d1u�h�C��~̊xdt��c	Fn�dOBj*Z��Op���O
���1���rx�P4.W�d�¢��5f��������{��p�܆��?Ǯ�L3Њ�d ¢[� %|�V�l��bH�ĸ��.�*?\����! 5
�p�qs�q��e�2���ֳhÓ	��H[�z�����/�go��#j&�3\���^�נU��٢G�B0�{=��mE�ۡI^g4ȀF�
C���1��)��h��������?�_�8�b���ٛ掕�句ժ�fh$�C��ތ��:��@
7�h�ɀ|F7���I
���Z�CM��.���L�
�X�s�O�����3@�Ǵ;KBo��{Z��ڡX��^~}�T����"�SOt4¨e2<� �uj��п�5��뗗�/߾�{&�{,8��%^ٞ��2y!� �,��h�PGh��F���k/m����&���ĵ���sғkH1��q��	�HM�A<+�� cQd�����y�������..��oW��c�NƸ�3KQǆ̀�2t��Z��4�T�H㩖��zh9;uԧ�q;5� �H�sכ�l���v%{����9|*�䱸�$L0�2Bh&&�f�ۿ@�ɧ����d@�c�_2����ٖ��sL�|�>�O�Y�z:e2��1-G�@�����H�!����?:�����u�\,YS0�1�\�Km26W\cdO~z��ɓ��O      Z      x������ � �      V      x������ � �      T      x������ � �      )      x�m�Ks�0��u�,܊I$����E�N[�"J4!r���k�i����<3g�WӨ�d'�YE#yN+A��G�)��`��w����d�GQ_��9͓,x_��N�����[�U�16��,
{����օjAa�L���ǩ�����i�`�h9!��6�i�}��g��.+l��(�*���Z�>a��/�!��V (C򳨶������>���fCQWL��rW��JU"^�x���W��E���{�٧l�o�7r�G����^��Z�e���n3i�H��?Kr�     