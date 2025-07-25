PGDMP                      }            MEGCOOP    17.4    17.4    m           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
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
    public            	   MainAdmin    false    275   %�      @          0    25325    asset 
   TABLE DATA           �  COPY public.asset (id, "Society_Id", self_building, rented_building, rent_paid, godown, godown_area, godown_capacity, godown_types, godown_type_agreement, godown_type_per_annum, storage, storage_cold, storage_dry, land, "Land_area", land_area_lease, furniture, furniture_total, furniture_amount, computers, computers_total, computers_amount, item_name, item_no, item_amount, created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    243   B�      >          0    25311    borowing 
   TABLE DATA           '  COPY public.borowing (id, "Society_Id", "Govt_loan", borrowing_from, borrowing_type, borrowing_amount, borrowing_refunded, borrowing_outstanding, bank_sb_ac, bank_fd_ac, bank_rd_ac, bank_cd_ac, bank_thrift_ac, created_at, updated_at, other_mention, any_other_ac, ac_name, ac_amount) FROM stdin;
    public            	   MainAdmin    false    241   ��      ,          0    16424    cache 
   TABLE DATA           7   COPY public.cache (key, value, expiration) FROM stdin;
    public            	   MainAdmin    false    223   B�      -          0    16431    cache_locks 
   TABLE DATA           =   COPY public.cache_locks (key, owner, expiration) FROM stdin;
    public            	   MainAdmin    false    224   _�      8          0    16567 	   committee 
   TABLE DATA             COPY public.committee (id, "Society_Id", "President_Name", "President_DOB", "President_Contact", "President_Email", "Secretary_Name", "Secretary_DOB", "Secretary_Contact", "Secretary_Email", "Member_Name", "Member_Contact", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    235   |�      H          0    25397    consumer 
   TABLE DATA           �   COPY public.consumer (id, "Society_Id", departmental_store, retails_unit, no_of_branch, closing_stock, purchase_date, item, total_sale, "Controll_wholesale", controll_retail, uncontroll_wholesale, uncontroll_retail, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    251   �5      J          0    25411    dairy 
   TABLE DATA           l  COPY public.dairy (id, "Society_Id", "Nos_of_milch_cow", "total_value_of_Milch_cow", no_of_cowshed, other_item, other_no, other_amount, produce_in_litre, produce_value, usold_litre, unsold_value, dairy_product_item, dairy_product_value, collection_facility, testing_facility, sale_of_feed_medicine, sale_of_feed_medicine_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    253   �5      2          0    16456    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public            	   MainAdmin    false    229   �5      L          0    25432    farming 
   TABLE DATA             COPY public.farming (id, "Society_Id", st_male, st_female, sc_male, sc_female, which_landholder, which_agriculture, type_produce_agriorhorti, production_quantity, farming_activities_amount, produce_quantity, produce_amount, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    255   6      N          0    25446 	   fisheries 
   TABLE DATA           9  COPY public.fisheries (id, "Society_Id", male_fisher, female_fisher, total_pond, area_of_pond, value_of_fish_pond, nursery_pond, area_of_nursery_pond, value_of_nursery_pond, type_of_fish_reared, fish_quantity, sales_of_fresh_fish, dry_fish, smoke_fish, fishing_material_other, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    257   %6      B          0    25339    govtloan 
   TABLE DATA           �   COPY public.govtloan (id, "Society_Id", "any_Govt_loan", type_of_govt_loan, "Loan_issue_year", "Loan_sanctioned_amount", "Outstanding_Principal_amount", "Outstanding_interest_amount", created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    245   B6      F          0    25369 
   handicraft 
   TABLE DATA           �   COPY public.handicraft (id, "Society_Id", item_produce, nos_of_craftsmen, wages_paid, sales_turnover, other_item_produce, other_nos_of_craftsmen, other_wages_paid, other_sales_turnover, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    249   .?      D          0    25355    handloom 
   TABLE DATA           �  COPY public.handloom (id, "Society_Id", no_of_looms_own, natural_dykes, dyeing_house_own, item_produce, total_handlom_sale, total_powerloom_sale, total_other_sale, local_market, local_market_amount, export, export_amount, production_employee, admin_employee, other_employee, wage_paid, sale_deport, workshed, production_name, production_quantity, production_amount, purchase_name, purchase_quantity, purchase_amount, "Equipments_Name", "Equipments_Nos", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    247   K?      \          0    25567    housings 
   TABLE DATA           �  COPY public.housings (id, "Society_Id", borrowing_government, central_finance_agency, housing_urban_development_cor, state_fianance_society, national_housing_bank, other_financial_inst, land_asset, building_asset, other_asset, adavance_year, advance_amount, recovery_principal, recovery_interest, outstanding_principal, outstanding_interest, overdue_principal, overdue_interest, society_house_construct_number, society_house_construct_value, member_house_construct_number, member_house_construct_value, independent_house_construct_no, independent_house_construct_value, independent_house_construct_earn, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    271   h?      X          0    25525 
   industries 
   TABLE DATA           �   COPY public.industries (id, "Society_Id", "type_of_Business", name_of_item_produced, person_employed, wages_paid, sales_turnover, course_offered, nos_of_trainee, course_fee, teaching_staff, non_teaching_staff, salary, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    267   �?      <          0    25297 
   investment 
   TABLE DATA           �   COPY public.investment (id, "Society_Id", "investment_Status", type_of_govt_loan, loan_investment_amount, created_at, updated_at, other_mention) FROM stdin;
    public            	   MainAdmin    false    239   �?      f          0    33832    ivcs 
   TABLE DATA           %  COPY public.ivcs (id, "Society_Id", activity, household_covered, share_holder_member_name, nos_of_share_subscribe, amount_share_capitals, nos_saving_account, total_saving_mobilised, nos_rd_account, total_rd_mobilised, nos_fd_account, total_fd_mobilised, corpus_fund, nos_loanorborrower_account, total_loan_disbured, outstanding_borrower, outstanding_amount, product_cmc, "machinery_tool_CHC", agriculture_item, agriculture_area, horticulture_item, horticulture_area, livestock, marketing_trading, consumer_store, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    281   TI      0          0    16448    job_batches 
   TABLE DATA           �   COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
    public            	   MainAdmin    false    227   qI      /          0    16439    jobs 
   TABLE DATA           c   COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
    public            	   MainAdmin    false    226   �I      h          0    42024    labours 
   TABLE DATA           �   COPY public.labours (id, "Society_Id", society_operation, "ST", "SC", of_which_borrower, other_specify, no_of_worker, "Govt_body", local_body, other, income_earned, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    283   �I      j          0    42038 
   livestocks 
   TABLE DATA             COPY public.livestocks (id, "Society_Id", no_of_piggery_shed, value_of_piggery_shed, piggery_activities, total_sale, no_of_goatery_shed, value_of_goatery_shed, goatery_item, goatery_total_sale, no_of_poultry_shed, value_of_poultry_shed, poultry_item, poultry_total_sale, no_of_duckery_shed, value_of_duckery_shed, duckery_item, duckery_total_sale, no_of_cattle_farming_shed, value_of_cattle_farming_shed, cattle_farming_item, cattle_farming_total_sale, livestock_name, livestock_no, livestock_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    285   �I      b          0    25644    mariangjingkienjris 
   TABLE DATA           �   COPY public.mariangjingkienjris (id, "Society_Id", lrb_source, lrb_amount_recieved, lrb_amount_utilized, lrb_amount_unutilized, purpose_of_grant_recieve, shared_investment, fee_collection, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    277   �I      P          0    25468    markets 
   TABLE DATA           �   COPY public.markets (id, "Society_Id", agriculture_input_type, agriculture_input_quantity, agriculture_input_value, product_produce, product_quantity, product_value, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    259   J      '          0    16391 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public            	   MainAdmin    false    218   J      ^          0    25581    others 
   TABLE DATA           �   COPY public.others (id, "Society_Id", course_offered, nos_of_student, course_fee, no_of_teaching_staff, no_of_non_teaching_staff, salary_to_staff, service_provided, employee, wage_paid, turn_over, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    273   �L      d          0    25686    pacs 
   TABLE DATA           �  COPY public.pacs (id, "Society_Id", activity, amount_sanctioned, nos_of_member_loan_for, purpose_taken_for, principal_amount, interest_amount, defaulter_no, defaulter_amount, npa_principal, npa_interest, outstandingloanee_male, outstandingloanee_female, outstandingloanee_clan, outstanding_interest, outstanding_p_amount, years, recovery_female_clan, recovery_male_clan, recovery_clan, female_clan, male_clan, clan, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    279   �L      *          0    16408    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public            	   MainAdmin    false    221   �L      R          0    25483    processings 
   TABLE DATA           �   COPY public.processings (id, "Society_Id", item_name, item_value, process_machine_name, "process_item_Nos", process_item_value, sale_of_item_name, sale_of_item_quantity, sale_of_item_amount, packing, packaging_type, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    261   �L      +          0    16415    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public            	   MainAdmin    false    222   �L      :          0    16581    societycapitals 
   TABLE DATA           �  COPY public.societycapitals (id, "Society_Id", "Admission_fee", "Share_face_value", "Authorize_share_capital", "Individual_share", "Govt_share", "Other_coop_share", "Primary_Activity", "Secondary_Activity", "Tertiary_Activity", "Other_Activity", "Society_Fair_Price_Shop", "Latest_Audit_complete", "Audit_Class", "Working_Capitals", "Business_turnover", "Total_reserve", "Profit_loss", "Net_Profit_Loss", "Profit", "Loss", "Declear_Dividen", "Yes_Dividen_Amount_topaid", "Yes_Dividen_Amount_topaid_Govt", "Yes_Dividen_Challan_date", "CDF_Paid", "CDf_Yes_paidamount", "CDf_Yes_paidDate", "Grant_Type", "Grant_Year", "Deptt_Name", "Grant_Sanctioned", "Grant_Release", "Date_release", "Aid_Type", "Aid_Year", "Agencies_Name", "Aid_Sanctioned", "Aid_Grant_Release", "Grant_Subsidies", "Loan_Sanctioned", "Loan_Refunded", "Loan_Outstanding", "MANAGERIAL_SUBSIDY_RECEIVED_Year", "MANAGERIAL_SUBSIDY_RECEIVED_Amount", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    237   CP      Z          0    25553    thrifncredits 
   TABLE DATA           !  COPY public.thrifncredits (id, "Society_Id", year_contribution, member_contributed, borrowing_loan, borrowing_loan_st, borrowing_loan_sc, "borrowing_loan_GO", borrowing_loan_issues, recover_loan, recover_loan_st, recover_loan_sc, "recover_loan_GO", recover_loan_principal, recover_loan_interest, outstanding_loan, outstanding_loan_st, outstanding_loan_sc, "outstanding_loan_GO", outstanding_loan_principal, outstanding_loan_interest, outstanding_loan_defaulters_no, outstanding_laon_issues_defaulters_amount, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    269   Al      V          0    25511    tourisms 
   TABLE DATA           s  COPY public.tourisms (id, "Society_Id", deomestic_tourist, foreign_tourist, entry_fee_annually, parking_fee_annually, other_fee_annually, total_guest_house_or_lodge, income_from_guest_house_or_lodge, other_source, other_value, male_guide, female_guide, product_promotion, sale_of_product_annually, "Equipments_Name", "Equipments_Nos", created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    265   ^l      T          0    25497 
   transports 
   TABLE DATA           Y  COPY public.transports (id, "Society_Id", "nos_of_Goods_vehicle", no_of_passenger_vehichle, vehicle_type, vehicle_nos, vehicle_value, other_asset_name, other_asset_nos, other_asset_value, other_asset_income, total_driver, total_driver_wages, total_helper, total_helper_wages, other_total, others_wages_total, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    263   {l      )          0    16398    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public            	   MainAdmin    false    220   �l      �           0    0    _member_of_society_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public._member_of_society_id_seq', 1659, true);
          public            	   MainAdmin    false    232            �           0    0    _societydata_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public._societydata_id_seq', 1348, true);
          public            	   MainAdmin    false    230            �           0    0    activities_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.activities_id_seq', 21, true);
          public            	   MainAdmin    false    274            �           0    0    asset_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.asset_id_seq', 145, true);
          public            	   MainAdmin    false    242            �           0    0    borowing_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.borowing_id_seq', 141, true);
          public            	   MainAdmin    false    240            �           0    0    committee_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.committee_id_seq', 1530, true);
          public            	   MainAdmin    false    234            �           0    0    consumer_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.consumer_id_seq', 2, true);
          public            	   MainAdmin    false    250            �           0    0    dairy_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.dairy_id_seq', 2, true);
          public            	   MainAdmin    false    252            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public            	   MainAdmin    false    228            �           0    0    farming_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.farming_id_seq', 3, true);
          public            	   MainAdmin    false    254            �           0    0    fisheries_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.fisheries_id_seq', 3, true);
          public            	   MainAdmin    false    256            �           0    0    govtloan_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.govtloan_id_seq', 140, true);
          public            	   MainAdmin    false    244            �           0    0    handicraft_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.handicraft_id_seq', 1, true);
          public            	   MainAdmin    false    248            �           0    0    handloom_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.handloom_id_seq', 4, true);
          public            	   MainAdmin    false    246            �           0    0    housings_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.housings_id_seq', 2, true);
          public            	   MainAdmin    false    270            �           0    0    industries_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.industries_id_seq', 2, true);
          public            	   MainAdmin    false    266            �           0    0    investment_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.investment_id_seq', 141, true);
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
          public            	   MainAdmin    false    260            �           0    0    societycapitals_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.societycapitals_id_seq', 1853, true);
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
       public            	   MainAdmin    false    4929    263    231            6   N  x���K��6��>��8]"�Edv=H2����E�4�S�8U���A�ǃP$��!��������oq�����Z�H�.;���3�3ue_�\�������I���d �⿂T��K�=�"�U�����#���#>$�TCb�����?��s �_�!?���ܥǢ�]Gv��O�'y���o�ޯn9�]�d}�x�y��I�E��=(����6�oz��o�Lx��喧(��dh�`}��e�?*lp/럿\�/[N�7�ONv� �����>��.я���g����#C�����=3(�b�WXY'`S�Z}�y�zт�M.\���z�๕��Ɨc��\�oO��)��
A���d���3S�G�y�}�hy���a��KO���`+WR��:]Ŵ�9��BO������7��6��(��3ve C8���̭��J2���ը��z2P=�+Oi��2��^`�Klo�i�`9<=?´Y7]���	ZP��� ��ac�7�bn?�tburڄC�P�~�qt�W�
�oBa��d��P����H���c�M?��[�{2���)������Y��}8Q�!C�*�v��4��3���g�9d�C}��J�1}� �"A��g�=�*a>�z���~��iqNr��ue� ��U�%��$�-���@�X�ғ�t�-�y>��kA^d ���C�{��~���F�8�����{�܌���bOԧ�G�R�Q��G��WHz}��g���\���
ۨNJ�i�:F�-�y�@����s|=d�B1
�zY�XjF��%���\ ��sO,�b�����֏��6��[XMY��d�n��R�2�������뮀<�e��R�N1퐱n�,Xᘦ�L2�|��7޳���f�.
$%bZ�L�� $LS�F��\��E�=��� �r�?Ԉ)�n��V,'8d�C$�e�i.K�N؜_-9�/Ȱ7+|��������s�X3�-�9{AX��)�)�8d(auLxp����*i?�3��򵆍ԓ�
��^0G����<��C��F��ܓ���~g��;��ٺX
��c�-ެ���ֻ!d�=��@��n ���rvW~����_i� =��Y�x��n���w��vT�4�� �A�����tb�űBu)ߕ� $�R��?aZ���L��ʶ1_eA�t��+�E����U������z��5�ԓd����5"��]6h��\���T���,[���d�������wo�શ�݀�����|��R��
/�X�LuX��������U��n�}Rᐡܦ����fU�zD~���_���?����?������Z$R��L�Ȱ=ꥦV?��U��1d���kdw ֪>�ʪr�΀C�^B��5�������ה�|˂�R ��9� �i�_�[���W��vAW><Q��Q�KZ�>�����w��tod@��r�Qs��O��sW)�-���r�WL5w돇=�A�B�}7��'��.@(�RN����"����HL�YL�O�@m���0J�t42p�$=��,�T�ٙ�zg�!�y�`Vɹܓq��D�跴�c>�|��zqr� �`妏Y P�F��&�2c�a���
�}j�+���*5�JkO�*�B��t��;��W�{cЈR=P�閔`ww�*�Břҧ�E��L(��y�I��S�"�5x�mDN���F�VlXO��pR�i�
�R��c}�}*d,m~ZeZ7B�^c5�LW�C����V,���|ᐡ��!Xf>��Q@N;Qi���f�����%�f����ۙ�W3�bE��L�'��>���S��!�y1I�X���b�!C��Z��o@�m����R:�jE�r
G�tHQc�Z�&%�U&i��q�Kr�&8č��L��l��	�L�>�n�(o�/WϷ�h�0TH�q�s"u��=��P�l偄�T�WC �ؠ�es�y���\c��)���d��
����
%���sm�t�j1/�d�a�g�Xzn��C�
%�}�<ve�üyi�?F��g�s�s����x��\��dh �*�.?������c{�����U�'���ɕ�'� 0KO(�[h�=��j(l-����
�T2�]���2��Ѻ�壋]�˅v@�Ϟ���������T2�!?�M��Q5��!a"� �t�2@�>���9v��WGX�DR�֛���Kv���Ȝ�����ɹv]O�gmi�F���݊EG���/n>1:!֊bCCO$�Zx[�7Y����;��uN�m��;2SA�'n�bױ��0����lh�[�&B�� ��V�?<��a��[#���jC=\L�����]���	��/��s�z:͇,�RՀ�h6�7��0���|���9c[�2�!3�T�#�ی85Q�zq�](f4�^��͹���)��vA״���
>�(���Cu|���_�zy���{��ȍC52��@�r5���pr�P�ƞP�Tgƃo�>�s_��,f3-y.EGKD/���Q�dm؞���x��Ӱ���A��+�ɀ"�q���(���^�;���oJ*�7��y�F�t"�\��x-���Bs�y��e`����������FSY�^l_}�k�ڔ6�`��>HS�����])߯z�s[�����þrn������!�>f}��!Ɋq&�F��6��H���2z����p[�=�f���`���!�|*�&n���	�N��^kd`AD�����?�s�⢦��hd@���7r_�)�V��~F��mG42P�!��0�s���(ļ��'��PI	0&j�Ϡ[�Q�/Y�o;0�r��gL=�Б�zE9=�b��6~Ӷ���-Yl��9�N|q���Rf\؛���nܫ�s�ӓ
I� �'W�������x(���S���� ��=���r��š�e�K������ �n�M�΋޸�=�	ݮL�L�2�C�X?����1+@
��A#�:{Bi������v6�;���iCT=Z@b�޲�Ԉ5O�ܒ�Е�	��=7e����̻}�N�k�_{2`m�0>���dm |��a�ms�C*��ǚo��}xŌ�K)/嶏����R��aXP���&�Yy���6��Rg���h�[��;K ��q� ��<�`r�Icۍa�M÷~���↨�!�d�E��m%-ל�^y��*�}����	�q��ǰ(�]J��Sl]{�g��e�Bb\[�OS�y�l�B�H<�x�P8�^yz��7�L�k���Q�6/������2��ŠOb�t�2�X���m���x���u�Г���]��$�����3{����ғjb=�<&�l�z4���C(�L��M㡤�3ДO��!�
F%��E*��{:���'�
������K��|M��ғ)&a8D�~����n�Y������V�� hh�S�$k$�	q/=��2e7q���<���۩�F&tQ��{���T����r�ō6����$�#�BG�݅
p�'md�bUnF�|w-�0�G�*�P�H�'�0�2��/:`���� ����ƯUG�͜����Rhd��Gʄ����f�>�s�� �Q/̻� ����+���͑f�����/�������|}}��F�      4      x��]_w���f>�3��,�?~Z;�t�'�8��s�}Q�L�m�ؓ���[%	C�ٝ����O�RU�TE�T��%�6�8���6Ru���AJ7�\�-Z.�{�^'�I�_�:K�G�f��o�ʷ�'W�e�ɟ��� ����^Z���d:z�C}y�\�޿�>�����ۛɋ:{���Lng��O���/
]F���EH��~�i������C�QG�7����mJ��-�6�7�6U�B3eF��v����΋o�ث)��f�N����i�z���Z>$ʯ���M���?���m�;Љ��C��N�'b�V����~]��MHW�t��i�
�sa�ޅ�(ӈnN�7��UoH���6�U
&�����z��]1�T���w@<����['�vI���9�ZH��F_F/�N쯇���J`I�HV��<��o4�o Ԉs�)˦��=�K������U�t�`0�?O���FW�+����X}H�!q�h�����to7!{t���dCa�9��s����f�Ѹ�L'�<|�y���_���������4X�s1"�{���lD+1$���K)OaJq��8����Z�VVv��94��f����l���L�"B�wuF�0�u�6=���7 Y���L���G�1]�kW�x7�g��O����Ce T�xN���r1�"����|��c�.�0�o_^t�'O�'��6��U�8�w+V�R��i�묙��4��|g�����L�2�t���r��2G\/'�D|�8�������F)�.G2�ΡI�� �M������B��Bn �i�]3���ݓ�Q��pu��x��<z�r7��^���$NG�7����}Wy���|K>`��qs�0����h����)M��u��0zKR�%�i��������X��O������XY�7��E4�Ndbz*X���[���N@1��Z�X����7����f�ݮ�R��3�Z ��DC�m�	M����*�����;U�4�~��q2}|��?>����/�o[��o��`�S���M�|����9�,	�x&�:��T[s|�2���ݯ3_��-�t����W�ٵ���\��{�#�w���[�. ���d�g���"ˢe�IzI����(����59�⸺�?݇��:�jX��k~�-c�����������8�	�u45���ǄŞVi���Y��  �t�"�+w�U��zp��e��=�E��h�Up�����MW���d�Z481�.%�LaZZ�"���l�(VQ�] vQ���w��i@cd�x���\�R�������Ae�N�hQ�t��U�QG��m�O"G�����Ra���T��>^��d��6' g�CKo�!r�4v��v٠Y�q�n�����x2:�S���]������B�$�1��!df.K�ݛ��a׬X����t�+YL�/�G��;�����sM�ʻ�qlIig�j�VT}����D�5CW�v�E#��w	��'aKV�#u
bE�V;�Eg�i�p�2bq���\��}�s��}o�4��?�c�>\���(�f��{�/L΅)�x�m���Ji�!���6;�7��628;I���������0�%q4{��
�o0��`b��~�I.^hu���[��b.I�Q�&��(��c�C�����fm}&~?��`qN�hI?�Ƒr��0f�]+~�P���%�sA�D�����ǎ5���;x��)7oa=��iYV �)e��2޲ݱ₡H���Y+��>{C[o�!��O���<=�Y���M��r�I����4�aV������S7�=�u;���t�.�o�V�m��p�:́�iJ����R��D����=���Gv�ʷ�/���ɥۏ���E���S�T�p�ƒ��y�uK��÷eϳov=�wݾ��a��~�}=�e�1[�yv/C�r��n�!ʆx#�G��z�n��u���<��[���Jo;:ͪm/���`hM4��T����t���4͂��=RgA�W�$�q�g�+q��'�kT�V��K|�;��̤�[Dc�k�Br�N�b �o7�cU�E�u��	�$Ҡ�.^�������~�����¤�vO�h�75)�w�5ޤ��9�b�X>ޢ%<�m��
oH̊/i8<n�m�hߘ��">�%�A�C��B�*��m2�����
�W��o��ࢽ
��4�h��L�:�Q���<���g�,����)"���I����<�QgXAC-�W�4��V_Z�^�Z�rϢ󊞂)���D?E�-�ZŲ:�2��!�:�]#�[e���]�k��ō�;������RU����YE����.k�7�� ;�/�55"�!^.L+P�i+����p���7��"X�V4�.60#ٌ����x��/k�=�%���ѹy�c�|�?R�k'�b�Z�O}�{2o�Azmޒ�"����{�y�e�����C��1Y�*i���L�G�5S�q�?���uG-fώ���a�ʊ�8��l���:���Ut�V�Nf<�u�p�t�\����!;/n��=�O?��n�θ� ͻ]J�$h��@�C��p�h4Q������l����tg��}O�e}�.�F�Բ*�Œ���l�=�"x�0]PV�����l��g�U���,�s�=�xxW�q�Ot8���Cxx���VVN�n���o�Q|�A��F��<K놄YJ���d[М�U ��"\q�M�o�������>
lٺ����&%����4
��L]��2�������.w8�Hi�~�� �u��'��I�q�D��.�@��W
��$q�T�ɻH�P�_���#-�1�ft�ASmҍ6ہ��n'��iV�J���<S�ź��.(�ųn;��Ǽ�YX4:��@��Y�3/i���т+��|�f��4���溳�	���A���p�]�ڞ�+q\�߁�V�-UW|�yd�p�\n7��Yf�H��n�e����ٶ��p�h�[�.�Kw����L�f��=|����"�_��'c�F��X�,y/�����,�n��!H	��-��d5��0�>�_0@In�!��"D����`��r�v�ur?0MUG8mw`{"�)�������K���u�ߏ���+��Wb#K�O�4m�T>�)�6��+³��<n�x}��Îֻ�fQ�ǏM����h�+D��ȿb�M~��:~,����S��g��xq�Q�) ���7ѐS�҅Vs���?N�3h����5�{$n�������k��̋љ	k1i���.�IfA\w�gql��7Z����6�i_̋�w��ʆ��p���DC�M����:��#ؖN��~�p�:_�X�A�{����vr��. �74�a5�`;�{�!�j��gH�1���!�~^v�:��c��0EO��[�:?���`T��Dt�������c�zb��U��E�����]���j��S�q���R���΢������&l�!k;���#�r��8��Ev܎��Y�<�EG{q��2�m���h��<�F��tA��G�J�=Ye,��w�������u}��N��J��K�\?>�^�����H}��˭�*e(K���˹R
�l&_���T�����`��du^�+���y)��3"v��0Z��H��j�e%�Ǒ����OD�o�?�⛕� �W@\��� �U$�d��ێ}�WRVz^
Ƕ8�j��KH<8��$$��$B�+��4���&lH<��(�<˾���ӵ�����[�m;�����5��/GzK4Tt���~Z�Xg�[������[d�v��N�ɢ� v0��l��4��P&xn�.��v� *1?��s��3-����c׼ e��l�uP�� �y���rՊ�m-���(��uHc��SuJ;z#��|^�Bo��5g�Ǳ颛]�,^�Ga�#��_�!�?����.x���5H�`���x�������I��.��-��%bL����lt�u���������(W�/������-�&��2�n_�P�'�	ܣ���u�| �b	��C;��W�d    �QCV����[\D�'���jc3b+���������p��L&���o\��w��i
]�ls<��#h�p�DCT��}|�2=�~���l	�?P��!��k?�C�i���ӑ��kEWl�M4D�ų�۽Cd�_ӆ�^xͣl͓�6܏���#G��� ���°�E�4z]<�4D��|Mh����Z��i4�k�z ��Կ��`WYZz/2�D/K�Ώ7��~M4���U�z�{iF�n՝�g�,�MS�n{�,��uߢhwn�4�,��HA&�v��x/�a��wE�Ug/ϯ�x��hF���=�tW��v@�͢b�4D�����M�w ����{�{ݡ��8Xz�ut$�4�tu
c��Ώ�˲�&�m�SY��XVAͶv��Px(����j~���{���A�MuV���Y���2X�C�l�!֖r�t����>�K��y�����K�I�ì�KvP�&-�4*%�����eSCۭ92���MF/0�������7����^��"kVu���c��r��N*b��JQlfFGA��w��@ͯ�J<b���-:|0���hv��20{r4�DC�]�'Z��>#׿��h|7�Y�qzG���v��m.�.�vA�&��qt�:�)t�;*�[���b�	,��NR7o�.t=��:���X�x.c��k��t��� }��`a� ���v�����uD͇=�3<~��ӕ�.�����-KP]���(Ai�#Z��x���I\���:�]��y���#`��E�Y��(i�/Q��w/������\�2��6�!u�ouD֎B_���Opv��f�i>�w�MÁsCw��vqE��|�!�����k�����u��Z�;�o�������JlYIC�M��J��4k�j=��̱zm�/h�A��fC�{�N��9��y~�����X���)@�����"���i�<K�}��}x��y���~+w����pz���Q��COꦃ�Pi�*M�M��>�V���G��Oi^� P{�09	H����@:ʌ�h���ԋ��"��8���_����������̴=��'�w79��@�~���`v 9*��!�.�3ު7A�J�Y��x�HU���}.@�5}�?r*��q���ϋ��T[�ϰ��!p���dI�<v�ހX�t�b�7%0x�u.���9�`����tʼ�&�����B��cke�o-��㐳ī@^�r�I�G��|�k�F���J�\�q@��:V�6���g�+�r+��v4#�ҏ�y��*����Ԥ:T��5k��ŲRv��� 8i�RVo�#ª��3�+$��%+��]wFc�|7��k�������iJ4ě��&]���c�I�_n����A�}�jGy_GS�r��ʗ�^��lz�����\��u�UP� �^K��g��� ��p�FYX����|���{�
��D)Ԯb�����CKO6�u�"V(�X|ŏ\��E�8@�8������{X-��aٺc�}&:����m�cy�qyJ]y��!��4km��+�j��;�D]Z�e����&�dE��|�]��x�~8o|�f�l�!ʶ2��1�c��=+Ϩ�y0��GA��`�V�&����j�<D��GF&$W݋Ԋf�0x����w��P;uQ��I:�b�V�o���/X_0H������7���Q9U �z�]s$7=�F�A���h����D�S��4�&��5	�"?c�1i�;��}���|R�L����7�`���U}�V0��x&1�uB�&���%�,�¨~a��"b��.�q��VyOO̎!5h��e緼&�O�%Oks�l��jG����إS$�{��gH+�籩�I��4KR���`N,~��-���u�&�v�e6�vOAz�~�H#�i�n�b��Z��^���x�{�E"�.`�-��]>��93h��y��ȇʰ�,���("}�]i!���"��$8�Q�✎��b4;x��ڶB�ҽF!4$.�2	ܪS	th\�:���Q��a:��ĳ�Nت��r��ぅǀw��:�r��,X�l�_�Xiy��گ���}eYi�X�:ܭ�mg�٥��� ƲXM4TS�Ue�d�[0*߿��{�|��j���}V_&�+�o�s�"Qo�
��"ݜ&B�3أm�6;XJ���sH�6�x��sN�S��A]Q���\��
1���J�N�3Gl�9��b����#Y����O,
�=�<ҸW�]��u�� ���(��-+���`��1�a�0�h8��r3z���ق܏S���nh���F�w�+3�a]>�-�FG��)놡������m~y�q8�+3y���cN,���J�$��`��.�K���V������MQ���5ܾi/�x�s&IT6K��4+x�k��UՔ�����`�!��-��[I�CFl1L6�q"kw�'x�B{�]N	u���kE�?^�t��>Dȯ�y��'kE^����|"N�!�9}��
�,¦�3����D��۶[T$oq���Ju(��11�F'��c�� ��F|0��/�N��g�9�rI�C������׊��Z�@�xIm�~�B���PF�ix��4^$Kc�Nf^��'�����v��v��9��29Q,V)�o��Ȃ�z?���_�O������e�N\���-S�`^[v1K4�(w_'_�Q�?>��QnJ(��"�W��DV�vD�i&׿�h�����*K;u��#\D���_.��Or}V���P�<����?����N�ҥ�k�J6G�7�����8� P��I
�
܈�����O\\���C𡾠�.��³��٢?��B��/�,��$K�%ܦ�ȝh��������v�S���D�6K�ک.���XTp9!,F��]� ַ>�l
S*�����[o�a�a���6֊��f:�=+/��c���U�E0g+*yY��l���5`jVJ3�p���Y����ux���9�����R���IE��� <)�ʮz�L"�u���O*�-�6�aL7�C����n-Qm�ʇ|��2<B;�g�*�6]�Q�wFk�������3��/<m7\B��<�R`�̰D����p������y�F۔G�ԑ�H4�8B�i�_�v;ygN��b�\y'��x�U���|��ӌ�,���/Kh�y�"�&2���Z5Qi�U�@E�9���	��J?M[ӊ������j�`h�&�(`�GZ%r����r��� O�`b�)?�b*�w��:D��}������`�dE����~�a�#��z��TF����V0��$��;,�4F���&��_8r��qf����j�J��Q?]:��$���4�m�=)����N5�\�h!�g�岏�]$g?�=~}a"Oq(�UAb1��� ]�Xo%Z]�A�W�˼�M,*��ʦ.V<4�&�狈�Z�+Q]'w+:�	Ft9��"�2��%�?��x����}�5�dka���X|ɵ��6]R��C�����Q� ��f�0�L"�h�&�04�Y��E�=���ͤ_�x������=�F�ⷝ�R�V�i�!���|�ߗ��{��`z]�&������y�15�z�Uvx�{Z���j�=�2�K7��Vh�����]F���1a�Ȗ�D�1Ac�c��
j�j��cn������̦���L�Y���M+8���g�{Q��fq�[т�[��BM���\���6!M4��D����D'Ow�.�U�\���vq�~e*�I��ɿ݁���&sl�T����^3�&�fi�_�vC��=�}Z/G�Z/'�WK�}�5yg��q%���a���u��M�u�-���}�搊?J4��V��4����y$�v��|�Є�q�I/3�_��Ƭ&��[�US$Je�כ��H��o�r�X���;�4�XP�ݬ]�؞.��u׫�xn,��-<�o��En�� �+_�U���ZL�
)5�����iˠ�m�w>��˕aca:�D�7yaz��<��p�������U��Ick���c�2����3���|���{�i�u��]��o�7�ʗh�E�� �  ��}���xP+�h\��͑�Z^o���ް�����FQ�2m�K=:��~�дH�L�d��?4F��i�N�E�̎�6b���]=�Ż	ӈ9n��X=��)�ǒh8 >[��R�t4��<7�|��Y�[��qEt���a�k��'@gy5WWN�b�霁�<!%z�H-�������l�>m�����`�mSLo��*M{g�GH	�=�^a&|\�JU��~�Ş�/��γ?�n�Ƌ�J�I�7�9���M����(��#����^q�u������]�H�
{�щ�V:��DS�9fᑠQ03���h������0_�n��W�#�_�����;<��ۜ֊9Ϛ�M�8E��Xў)��΃�1&��԰�	���64�g�� �o����5�,ă=�(�(�k�_Tkx���}:meMm��e�M4vW�8
7a̛L!�_�y�ǉ%���K&��	�a1���DC�&
�7�R�I�F��+�Vޠh"4�ӜGq�X�n�!Ʈr���S�&���ܕRתa���Dv�� �AC�r�]<���ѻUJ�U��"?�F�j��060nj�Ե��
��z.6R��|M��0�g蛅�@dmc�lJ�*��G��PneKLoe�e��xb%� ̻y�nr��Ө��O�����"�M�,a��m����1hn��K^���l�ڳ>�ݽ��om��!�=�P�t�i��p/T}��J�r�cx�������4�
���g�s�x�4��1�����*�#$"�-X�4mr;q�4{��^�)�>#O����%)785��i}%�f�1[�P;�*<i�J�r1�Xgqz.��}4.��|
HX�yhM4�d���Kf,��MP�S8��2��s�.xT����^=t��!\���U�����ҁ�Oפ9/`E�O�����?��&f+�a��$+��|�����e����d�%�8%�������8�V�Q�h���ZѦeG�b��UcIC@&"��tu) �L��_,�����dg�mZ9���\�R�!��2�.�W1Y}W���ա�W��WJ1��/vӏ\ǽX8#{�s?Ҩ%V�߬o}
���ڤ��`rK#�UO�}�ֻU�],#м@����9�u)�k��zJ~oxD��ە���}��O?��v?      `      x������ � �      @      x��\�v7�}v����ɞ���o�l'Zc;��Nάdh�m�"5�8�ߟ�@w�i��p&ɢ��@j��=ႉ'���w�����r����|����^���gLTLO��HV������(�D��rE��0|��,��v��k��B�������g��q�\~�n��ꋧ׫������xFyx'�T����]�P�D�	�E�r����g�N��pY�� ^��f�����L{"�7�y���԰�Sj�xo^܄�6E I :�?��Ptբ0`�����#Z�I޼�*���L�|b8�0?��h"�_k�FD_�4om���������lQ�f��>�,��U��?���C���/.�ߪ��v]��g�jS�7�����l�,����H�P�d����;�0|z�֖^%��������E��E��`^���.�؄��0,`�S�r��a�b,L㿻�l0ZM�(�  !���΃DЗb�E�F0�_�9��KRӬh�W���R���Fk#
aD�p���O��n��iSMiA��������E}�zI�z�w���8i��W��Z�&�:���|�n"u���/�&���50��Vu�b��j��ԫ��,�y���)�W�ֶrGa��gF=����v�~��j3]|Iq�� ݼ��Sa�+?r�$����B�.\��O�NjG`4Fi+dcF��;�t�Gm@� ��4�.�/#�]�}ɑ��x{�hn�Q<�o���������tC.�\�g�Yn ������J�s"O��<ĢJC#Riyh���h1yN���9���e��bV�|߰dʥ?��<���m�^���b�/^,��jY]�n�<�>V�W���W��j��^�4� �P!�lj��mϭ�(8�h�\ \j=έ5���ȫv��{�������q����U7��ݞa[v6h�7鍳F�$�fцC�jutd�k����z��>�l};��A�+�{���+����~�w�����9ؒ�TФ6@ui���Q��I w��Sz�������U5�38A�M��o/����]u�[&�E���Y��ȃ�6Ԯ?A��o���u��nf�E��Th-VϪ��t�y��w�z�8����v���5���8�����7����qI�����sM��r����n"-��ua����
`h������Qұ��֔1������g!��\j�KW���ڠԽ&ar��(Ij�m�((=�;�!)������ ��h&��c"�p4�]§-�N� ��?ᚼ'Ư�E�L���|3N�YE-?��	�r3�������Y�JAIJEY���h*ڤ��i���.���_Z4�@�m�~�Ԝ
C��Sњڐ�������0��3Rm�(��m%E ��3'ƪQ�Bm��U/��a�;��E` ���0<���� �F��PjC*��%�6����Qu.��T ��r	G��E�"��h0$rT<V�S"r�P�ʁQpA,)��D���	��]��S_f��xB�^r*��{b�P G����@7T��}��7�ao1��x�=c���ZfJ�����t%�ap�yP&G���P��$Ћ6@��q2�[�m�5�N��&���޻���6Hb&D~y\��`6��ڃ�*��DH!�m����Q%�H����F�0�	Y�Il��9��'�pkZLLsQ�DN�� �CP�P!4�H�)J�ۊ��p��� g�ڔgz�b;��ѧ&O{~w7Cf1�������}�|U�N�����M���,�+�!��$r=����c�.f�(y		�#g�Rd+N� diչ�!-oZ� G��	�#[���AcH�W��{=�:�ͧ���*Xv#)���Q�{h��aI���$8U�ȩ�j��2���A0�:Xo�����O/^�.?��묨t���e�4���M��
�%�`#�լw��D��	��0Bpn#�v�~��?���=��-�;ƺ���b���/(�Ϫ��
����ن�����^M�K�qH�Y%׆�|l��6���U���O�?�L�6�5�Wk�x�D�x����J��N����ڂ��:֞9�֦���XZT~/�H5,㿘�S��+~ el2U�iƭH�Jٽ�@���?����]�i��8�]ՙ�a�.�봝�� �Ɍ����@����u��o']v��u}W�kJv�B�w����GAA�B����7����hÌ`	�qEz#�8V���BlˢP��̸:���Ӫ9J��)'ʒ]>?1)Y�d�91�o�G+�Iq�a%��b�Y�!�d�91�o1)�d��o|�)ݓQ�0'^jz�#�K�5�� �E� Uc|�jN\��3���d��1�t��:ȗ�C �ISj��lц�@�ۃ��P��py���!������Ty�Z��n���t}��/��?t�t�F(�����j9��ߪ��z�%Lb{��:�(�i�{�7��#%�6K��j��r`�"�9�b۟�,�ڕ�0��l��ҵ�K����I��0Q���R�L�g{�v����iw&R��3�`��6@Q�&Z��h�/7�}�!�j)�Cl<_���m��~X>Η�D�=ͪeIj$��%E�aNl�ܞH�'�xI͆0t���P84,fP�%,����DE"#�Q�[��$�л7� ݄1���;��L� �����û-�!4R��h4p�=�4���gR!�hٞX!ã��E��V;R�8n��2ڊ�:h�2#�ݻ��m$�;���'i�ag9-Ę�Qk�J,NJ����!�}ܪ�6a�+%s�h�܁�݈�%�����#&8�+P\�!���� D�N$�ӽ+���M�Ղ�܉�Ȯ߮m�=;8_Oo7��X��QS��:�v���*�Ka���B���hԝ�q�l��0@|n\G�{n[?eک�~�%h�?ڢ�@��Ąr�q�i�6� ]��-�}W�J�|3�p~X�fE�������ڀl����3��V�����4�9Q#L�<�-wf��c-3�Il��rIR�����w�D��`s#QC�t��&B��G<l{D.�6��$6@[��nK�ލ��6� 3��nK�(��6E`��y��KjR;�há1Dh/����%�~Ԕ�Y�sq�ۊ�c�z]O�H��=��f��.����|J�4h��>�{zz�^���{������r��uy?���v"�m>w[���
�����4qo�{_c]����g��~�Z��db��]�y�<�KJ�mMl�&�'�5jI�*�e��Z^}�]W�?է�"S�<��:|�Y'���
6�T-�NUj�h@H��[�pI���m���~얥4��:�o�jY�ݮ�ў%��zH���9�O�E�1�8����o��$�Lm�Aq]����Rg����<N���22j����A=]��A�d��Z����|���(�<���[!���/����?v��(��0v���7͈�ı�>�h#Jh��Nߊ��f�u�<�!Nq��:���/�҄�������Ǐ���7Ӈ��] �o�~�����T����O/��Ə������/�=�U��h�ag�s��*�Y �Ppu�=�m�$�_�a�`�	��p���X0�!���-�@��HFm�R�zy�'�k���pO\N7�:?ڊ��)���xEYo�t� V �y���&=v��	'�MS�pL�#X��oJ��PN��8�0�^��I�V��
��[J�59�+�m��q�4iLW���L�Mf�~K9� C�s��� ����q�	�?�h�2Չ�z��ؒ��ռ�ݬ(���[I������c����Γ6�E]ݮH9�6�㮙fÆËuQ�r/n��#զh���{��Ux��Ɇ�p�d��I6\S�r+�`�S��ÄӞ��ⷡ7����3nd�2��bEbϼ Q�z4��u�曻o(X}�^�㊌D>]���+Թ;/��(��og�����K��n���x�W�����*���֨�C�2J;#m�_J���,lA'5�7�ZO����0o V>�XyzX�{^�l��E[ �L�pj�k׻�o)�|뺓���DhG!����N�g��^ �  ����T�mey��r{��U҄Ĝ�(ǙD��F���B6����������G����i��f3��96զM	�U�"�'�m�����G���2+q��!C�/-ԧ�������x�k�A'������-��I� ��$Z�;�Y�`��L5�� �|��\٦��h8M�|6�-Ǉ��Ɔ��ý}�\�ש���B *�Y��40�8o�1^SdχIm�S���/���m�����~�m��u�fi��|S�hRː�ty��G��A�wD�Q^�݋�D�D�4f��0!�5{����c��̧��l;��P�CO�_�۝�U������,�i�}�����<����ٺ�T�������_�~�pCx�?���{z��Û�W�?��|����_�._6�px�ësyIG6�4Lla4 ���������^���	M�ɻJV��RJj��5
���yN���uV)Hla� �SϦ�g��mЏ���C���|V��Pfb�x�,�X�GG�ÒB5�ۻqs��"�c��)͟?��J��8���5����pf<H���{�`���7�P�ogw������9d$E���s�
�#s��yfϺ�!ѕ9-��!�P����(���w�`�,Z�$*���-�"x]��Z?U���U��R�lV��M3}��W�o&;������C���g�Lbc�0�'6A����]/�ɶ�>��U����x��s��%X�M:��aAgHq<���jP�u;�>�ͦ���Η_L_�*#�ڥ@�*76�b=�����qF)S�'���>x�W��F�~�$gr#�=%:*L��Gy/M��Ғ��<-!*i��r��������z#�����&r�� Ӈ����zC��.J&���Ndc����.|��@1�Q���jbO��s�ڦײ9̉�s�l��ٴʍw�92G�T�ϫ�mJma�2���|L�Hng7m������7[��Pc!p���Љ-bA~��
�����b[ыö#�ΰ`�sIR[�� Ϭ�S7�U���
A�9w�T&}>Jj8��꼛q�5I�đ��:s��Br���^b8@`j\u�֞(����?��x)jZ<�*C�AtC���X(������X��q&�Rڥ�U�r���T��������w�__��T]���e�Z��dH�I=�LLh���̢�1��ܹ4�Ƀ��wc�ک���؟�~@��>p�h� !��)/��'!�(?°��E=/�!x�������C��X9�h#uG�Y��P�Q�9�߯4�]ח��O�~��o ǮC}����b(Ic!Av?��DȢ- �Q	+e�	AR�#��;�=ޡP����j7t+��h���3E[hK�8BI��;!w��{F�'�J�v �d�� l�T��F`���?��)s��      >   F  x��[]oE}���])A]U�y��+p�؈�
x���v� +�=U=�{�fj2M�I΍���S��� 3�����ٷ�/^}������O_�������/�n?|������W���k
%�x��0`z�c��P,.������T������ݯoߞ}+_���G X�������@�h��|�`x�i
��r��W�}�.�����	Ë�� �a
]��V����㧂�0vڅ��g9���,=��Y/	�7�Ò3r���4g�9�c�T���Smɒ�u�HS<P6��� �&>����<ՙ�[IDތ���\Lw�JGph�����s�u�%ӌM�ɺ|���:�� �O��HGL��&b���,��s��, ���S�mN���d�x�aDa,�qY�>�!�􇗐���2Q#�2�9jJz|9԰b͇�\̰ʁ�6�
�aP�)�b%Q=^6�1�*R�cғBc�S�]�,댞a�V<���BUL��d�ၡ�N�<��4������b�P4Ƕ�VL�B�#�����UK'�c�{�.��C<��b�EipL ׭��s�Ft1�(��y�S�cW��b�QT�_�RI;��0C'��c!y���cΆ'�����1�A�E������Ψph�Ty�f�Eyh�4dñ�a,z%��YL�v
3}"�	�0��U��.f�D�(��UbcYܡM��������;c�!$���5'���(��D�g#�uv�]L�H������kʡV>�4���h�%��>:bޫ�������!?]D�ׇ�b�V[mbD�[
3��"���1��3@�55]%�y��݊c��������������U�]g�΁��mJrR�*��)*43|���`�
r��=~�`)����HUܗ*��R�~{�I�Z3[W�
[��b�S4+ng�J ��\���R8��FϬ,W��tO�H	;��'WϞ<�����7�|����/��~�ũ��
&��SQ�d���c4f�!�ǌ��16�FWRlMU�BW�p t1�,�&�y^����_���������~�h��^?}��G��o~~w������߮���\�����_\\����O��w?��-@���!e�y&ͳ���J�ܭU�+̦Q�����D��X�6&�Tt���+Zn�������]�m3�f�<;Ver4f(s/��ٕ��i_ǋ�n����w���t�����/�\��z�rZ�� <��n	�r�'���u��L��́%DGv%�9�bf�"Vi4ƅp��R���沼V�v�~D�M.f�&����2�Y��Ɗ�< �X�1C),�fJ2-�_,j�A��V��4s�L�,��[�o��WO��5-��ܐ?��
.7��q�bI�,�,�
+OF��c�I��̀z�qL+26Y=�6�D[w����Ә����	��ٯBK�]���И!mʃ�&CI��[uj�7Gt1�)�*��a�N{�=��'���n�.f��d���dO��N����0C)ۃ�V�W,��b�Ь`� ��F�K/b�.+���W�s��R6l9Ds�Ë �e_Ut�Lc�[�XK�ؓ�6�̉{�D��!��n9ce��٠�����.�p�~��7��!��V��ZdY�s�u͖{����)̰�i+c5P������V�m3�Hh�`�K%���"kR���]*KqY;��m�ئ����"=�m�.E����܀\[�ϳX�2��aX�/�,�xF�.��0?f[LQ3�\qj56]�טa!-y7ReJ-��ZS�����b�Jֵ:�L�å���A�3�J�	�bE
S�Bp:F��\a�cED���h�)�sPE�\�P�`�A���o��L�V�a;\���?�fN����I�ܥ�[L��o�c�������~��װ� ���Bs/TD��fv��S|TK��A���T7�`Ӂ��ڛ;��5�"!����\�+S�&��!K�5�X ean*�`f����.�"�[q1�.z[���M*�f*+&պo�g��b��g��3|"�ụ�#�C/ں�ae�e@�x�ºb<�q!�GLsU�:�a�wO� ���B��ZW���:�_<{�P��%>"&�+�&������J:Z�}���1�>�
3}A�m��T)9�7+�|�P�V�}�tvX/_KNA.fXD������� �r5$��*���&���ꏪœ�ў6�Z$�����%0�C�`N����P�/ϻc�'6hb����OK�[0����N.]^+���j��|IZy���i�&b����9�Մް��~�ƪG�1M�&�t��4����Iu���2)t13��߿0����aJ�4k�M��C=Z�\�풺�טaCa+D�6U,b����j�H�5M�1I29�3����ys{����ͻ����esn���s>ܫ��U������]'̌�˾���x
�0�P;�G��U�K�6(�+I�`j̰4a��J!A�缔�-�tђm����a���J�Ѽߛ�(��/4fy��뇼j2���]���㱯/=F�Z�McցGc�����S	��ȉ���,���[�f*PT�4�d0P��t�*���T"0�#&'���HU�4f�D4`_4�Py��T���-,4m�5f�D5_��}�b��#[/Ț��0�**�*BԚ�§v�d�c��M�`�R*R�_�bԥY�YN跛�����3���ej<Z�T�%!�!I��(�1mˡ��S �Y6��ב�s�r�7;�L"%�)���$ʓ6�4"%�~6�������]�������/77��K>&���2/�B;�'�uipƺ�:H�
[�Wބ��4�G{�ˏz��1;9"I����d��e�����P�t�A�}�`����0���˽f��!�$+3Ρ25��"Y�o�2+s޸7���Oc6����
r��Qk�Z��P�#fED����W��P��B�U������ �-Լ���n8qEb�6�|@�o�%�*in�8W\3I��V��	��}�B9���W�S�eCu1K&�C�׆!�*�,��%j<����i̲��<��%P�R��@�x5f	EEh���iZ<�)��$E�R8��g�Fayj��'����ol�T0i}�q~S�����<�&�w�j��E&���Y2�4��0�H<� H���0K#?)E�Mʛ��b�FdE?��MM&sY�1K#�2�٧�r!�|���a�����m�4W�VP�=5f�x��az��տ_��1:��X�����9D���~�1�!�7��Iؤ�">I�Z��SkD�����D+�����љ��35FyY�3:��?���>��YF��/4������ȭ�ȭ�~��1�(��)����<o㦁[�╼w1�(��9�j�c�⯊�i��>;??�X#�      ,      x������ � �      -      x������ � �      8      x��}[s�H��3�W0�i7b�����#YjK�(kI�(�� �h�L` ���_��eUU lK�݈���3sZ�dUe旷r�$���N�E#f�yv|Κ|�Pd/�$p'��i$i2y��܋wu�F��$��8�؛�̪u6��חm&��s������C�n�����x,K�Y�e��*P��6��>��M[�ǣ�����{�c�����uW�1+��q������ݵ�f#��#���ӟ�E���<�����}G��������wN��q��s�g^:F�������VL�՗u]L���G��pru3���|�����}�������O���lz'
1]��o⻓�qR?r����m���o�$��J�"ʯq^틚�l�1�.E���C+����~�����.�m�]��߈��b������4o�gnr�E`[�%̶�?�2���ʿ���.�U�� e�E^�D�d��{c��L��Z<��m'��y�%n8����j�Zk7-��&�Z$y����#}�&���ξfݜh�E��r���η/y�=ԇcU�������Vli���a�봸��Е���CI�Y�E�5M��Ț7��[S�����0=1�'�Ӄ�{ �K&�7I�8�"�%I�N.��e��۬9N��j��H�`��D�����O���R��2� ��/��q����îz�Bl�JqB�$�k�����ϻ�;�o���C��ޙ�������:�o����7Ӈ�m3�i�zi�9�/FV�]�f[z���n�!H
D$HX�x�{ӫ���
��z<4ՀxKOm��H<���[�_u�{�k>M��}+ ��]�-���d���V_������&+�.#�/?���1v��&�d'����Wu|�Fg�;F��I!�]W��[ڜ��XW�R����znI����}]}ٯߛ$�{�|_+�����}o��vV�����C)^k����w��,�m�	Զ���ȳ�m ?�
-H��_+��M�<9sH�c4�1 =%D�b��Ex�h]��N���no������5�6���T~�$q}/��8~t��:�'NU4�Ĭn��[�ݮ�
�d4�j�]�w���RJ��"ۮ�P��`5[ђ�=�5��y���SV��K�?Џ���(�v�".�-�}������]޴���XH�x�۲��v�fl�I���c�ԮYdCк��t��lMBI'�dZ�F�o���4�V��œ4	#��(Ji���s�5/��L;�C�Ci�k�4D�J2Mt{�2���N/�k��R��O�ܓ����^���������~�y�z�GA{�8�G�KO���y�f]���Na���s�̍:�Д����w&m4Ihg�~{�����~M/N�:o�J��$ʼ��w{Cm?��0��4�M]�R��}�+X�t��r��Yi���|��z4F�`"�cMj6D�'A����J�>��?�ߝ�}�4�~�bM���^��&>����8i��>%���	��`�O�����K�?����rNH��Ħ��:+�V�nl��I?No����{�=�����,L��@��)�~Ӄ�W[�e&���m�Ɇ��.\��H�N������1�\|��v����)�i���kc����NhA�>�ѐ=m�W2�NƄ��x��U�k<�~pL 6Uf���x_m�@�o^N��Z���{0q S��6��ǜ����9���ɲ�W5Y�,4ֲ?g���At�7��h����Ze�a�:L��$r}2h��[�{%+��v��T׵%B
sD�%$�����j����0��ĺ��I&TtM;�p� )�덁]-m�Ug%_}��i�~"�/m���i��d
�\���f������n���n���MAF㛍��	#�0�L����	KԢ��
�(n��$�]���u��l�/�L�����%i�|O;�0z.zEy{l�ۻ%J�����k�]�M�g.$�з��V�����51o�?�l���3�.M�tk���ᓚ9��obšߪW<��g�o��Ip1	
��%	��o�Iܘ�~@{�/�&� f��M�>�����]�G HV��K�&}+EQG"{����c$y#3=J���]������&���o}�uN�����N�[�����&��H��	|8�<���1�,�)��Кe���L����w}��d����{�Xl8���j0�x*�0 [��7+�%E�ЁuG���[)�;��Sl�d3�>4���Y��UN�	�k�x
	E���Ϫ_+��ZBnɱ����*�����J+�!�$%����pn���u�h�[s+�����rk�)�S7ux�L�z?��sI�[(�T�J�å �O����J^��Ӊ�8����g�/�k=L�gt���%�վ�M�ʃ��G04IB�d����/��3��B�᠗���h��E9TzaI�t�oپn�2zO�z����GѶ"8����҇���c4�(\�rYh�ɠ������D�d����R�6�g�
���
��&���pT�Og�4�B�;�2M[��8�����D&@����������WyK�>�}o�,!S�ː�zG�\վ�H,Ć�6�P���y� p�O�9	����X�r����헖��M�h�۾��,/ɞ�zB�,L42�]�ux.��{:��^��(��A��IMM�qhS~��Jͅ�F��(�JWZ��ip:ߴ���^�8nj���:��P�^���݅9�iFK�j`wU���C.Xv�����`�m�1M�؊���/���@�v-�ޤ�=·x4Ĝ�����ӗ�y���i�>8#<�x��Z�zk�S�EbC�a<��?~���앙a�$q�����d����-�i&3]�="VY%���)� 2m�	ըM:��]E��6�ۗ$+����Z@:1����z�+�h�`�Ѹ���l9�I�t�p����c��b�"B=-�8��q����SN���3�+�v#�	E��+���;���%��x�*�3�ۄt��(w��.U�zＩ���-'�/�~j��K�,�U�Q�P{�W��أ��<������cE�]V�>r��]*���ÿ�˷���89�hb(���>߱�⸁�x�=&[\)q�dW]�$��G���A�I�(���J]*��S�`_�I��@�`�߉o8���
6�V��8�����V���/���&�W�e��e�T��8Y=_r�nhSL�r��d%�	o�?���x�Y8Vļ��T� |$�!R�Rn�8�O�;2��N��Z��E-�M�&n��~B��/��7��.5�ƭ��A���Gӑ��-z�����#�T8b�{¹v��#G�EՊ�[�T�~�8�?�� �d���K��7�a^�L�[Z1{��$�vH�������j�¿�m��;�U,�������I����4=�m��1'{V | �v��O̒�ؒ��.�nVe�aTq���� �CW���b��;�f+�B� ~h����CI*r��3�-NH1�����H����x��|�I�38�k�_���}�ׄQ��iL�6�d��;ޚ�������W	��gN2Fï2dI'�.��m�:K��'wB�ǆ�7�g��������7y&C�N�]gȞ2���4�j{G"��o3�%J@hRη�̺)/��I�J�1̦���e��%b{X������{_��j��`�Ηy+�Z*�r��	���\�_�ԙ0��%b@'�)���ߕ��a��G4�܋��`|�a�ǆ ��j�Om�!�B��1���יo��^bj�J �$IF�۱�}��2�N�I,#���F��k���A5�����\��Lk��1�H[�'a��S�?�*�j�B���+ع~��a�GBdO���Y	V&����G!�=��2��;A�Q�j�1�N8;�u�%���,3$��v"�d�V��_�����$�r;r<΢��')Y�/�8�``��F0�7MI-��=���c�H?=s�1�f����0���E�%������z#H�	��$v���=#c��l�N_i��/�ؗ�uo����A#�~7��D݇zw(���H�I�*    H��52)hfU`�d��w_i2����O�0���r%�M��g2�����a����	�xU�p��@`�zo�>1BV�s�c4⽇0�u��l�y�T�!�I�=�`K�J�
���ik/"k�	��#^^�3v�7F^@-�оv�@Ҋ�a�G��	��-ۨ���f����m��I��u����'H�v���1@��t�1���
/J����a��������l��k�"��tB���IVڃeZ�c�o��;
b>6���|ˮM��̄D���*o�M�9q̸�"����=��ٕsxc(<� �G�{�NK�Kh����'�xH��l�� D0
#1&���m�"I䦴�OXW(�n��H��X+jMY��҈�]�%X<������x����5B����v��`?���;Y�	{�m�bO{ِ�&5���Ld�rԓ91�� �l�vC��疞u�u����F����Hf�őCO������|ʶ9��ze�4�ǮdF�|�������)�|��2Ҽ�4t�Zw=֫<U�	�#%y]�>��G� ��j��_��\ó0��� 2��O�$ך.��v�$teVt�=A��BD�{�?�0��ɦQ�J���J���+@U m�X-~�>,�D�N��V2",2C[�Y[ӥ$�UӋC�;�����*�H8_�?s�1�	��ؤ�,8�J�\2���pG��Ǻ͑W�ww�5�Һ%柊�.�R覺��7��f��̤�)Ί��U��m	���Q���[ړ{���+#�����;H����H��ժ|��	X�9c4��'Р�c�m؋	?�� �$N�����hZ�U̫	M#)���yw�.�|%>]�tk�lsukgR]f;��m����n�gmoi��R��l��ԗ��{ɹ����<o����p�JZ���h�&�4�m�n��x���i�+��@[�7پ8=�cK_[���Nl��2���Fn���Vh���YZ*Nq9���d0����tc�U�~�~�SK�}:��.�ҷ�����}��
���N[v~��,�2�_�;)^8F�| u*��w���bW�{���+Ąvt>%�'��� p(wL�a�t0��qE����u�< �Nyir�v�2�1�on��6	U׋2.?�O�?��]|z��A �w����7��+����G�p������|z{M7]�y���4�8��	�]�%�A��P$���bj���d��I�ģ��O_��Pd]_m�0' ����y�|�Q)y&n��8�kK������2d� �ϲҵ�bĉ8��͆����i8q6*�iy.&[�ށ�QIS��v�{�7��/Z��9]ςG=���t��rϟ@�)�I s$�,��� �NЏ6��Peڡ��!��I�յ�t�����|_���(_5B�t]��`P5�<���ch����񛑡E:m�dSgpҟ��.mmBw��<���gt�߀Ц7F???����,2x*��IC?L�d��9�xx&h��Gmvڣ~��R�-� o��B���a��؝^p�c4|0b�0�^�
��x��w����D�}Z$�X�q:��N�~�}K��E��>=�I��c4�= X��V��U%�T�/��:�|%+�&�z��J�#�R�'��5_a���]��b���'-��`y.e��`��~$�Z�c+�P��֗]*��'�~��8L}�v��s֫vn�Ƀ�:b3Ve��_��P�-2ݳVZ¹�5��%�dO;s{h���b��s��:v����7j��sV�k�g{�l��su��Q�;E�^��cNf$�-��.�q��݅硢�O�{}U�Q��y�7�8`z�y3;2Ý5�)aЂ#N|���o��a�Lng��k��m&Ià��N��@�����6�*�����URr��1�(���	پɍ�>N���b�>)�'������kJK�EN�úà:�1��R�x8U�;��#tڧ&~�7������'X� i#�h`3`I�M.�]� $G���ġ�N��Q�0��Ec��9Az2-��l��,���C������Ŗ�m,"�ce����U�2�;��\92��5������U�G3K�����O�7�vYGٖ��c4p�#�t>���%�H3�>��IW�&ːi�J%�8��V�5�:@�}�Y��{��0��^����5�r��6���$������K���?��1����X���`�0$GK!����pO���X�f:v�2�=�[.��f�MS[l=e{C��?d�p��ɂB-�	����Sg��?~�"*��Z�>d����[��a����Y�'KF�Q �9���e㜉/��N�	G�d���ӛ�_��Z�o�R����P���$Ҥ6�I��l���QW%��.]��T6s�3�p2Fsa�F:��F��@�}	]�д�-_z�/�FHo��-D�,/�u��坮�n��"�Ә���gf���l�I�h����v^�(w�Z&��=�Yc����XZן��	��IL�2��n9X�{a"]��FG����@�A_����볖œ1PI�Ai�EN�V����=���!�y�Lz)Z�G�����_�y?���,��h�3�ʑN몑��J��+�E8��leR\�tWO�`!8I�	�f'�b@��~�n�����+���Q����d�O�r��l���nˣ�=�N%M+]�E���^���ѽ��Q���;�=�,6>�i���ƴ�N��T�v�\z���w���m>�e���m��{m1Hw�d���R�Y��ce����:����Ů~���S~�"}��4�H@�H9H�JﾄP@PÁ���0Pcz�&���K��K���LvKq*~_����I |���d�@�Fe�Bl��sǫ�^֕J������A|����r�����4� '�;O[��k�	i9�n�h�W/�u�̋b���4�ySA��݅�ʡ���_���Juѳ
�o_�����c�}���D�r�g? ^�.�;o�m;lr�H���)�w-�A�| 	E
	i%��t!h��ޏA��J������5L��]r��m�r��9s�w�h���H9poU�L�%��%��8c���c!�}�W �p��dN?Y3���}�z���W����P:Fë���Ւ��;�Lh���ɜ(<�9��"X���̌���g7&I5Y��a�a	�j��<����Q K���z�i��=*/܊�1��ځ��m��s	�\
��Uas�c.����xs���i�2�MK�)�� W��p֎��{�ϸh4c�(��.')���$�8)?�v�qP�q.����97�G!�X�.Ey�b�.C�F��Y�q'*��G��¢����tA�_
�K�Yj��VD"��V��������� u���v|e�s2CC}IV~L�x�_���#^�e�J�,��݁��9Em2���j~̞��0�b��g��&ǆ1UIr�3��dI�k,nĵ���Š���r�2���t�-�^��e��V}i�	s���;����(\��%L���CY7�Ӏ�K��a��|ӫ5�T�+��a���f�
�y�ֻ�;Kc�3÷s����K��ҬR��G��Koh�RH��iCK���߸�,M��$���Ł���yC7B�
ڄQ�xބTȾ��=��[`QoE=ֱ��L��h�㧰�i�X�GTf��ָ���O���ǝ�Y��@���s�k��|n�z����f�W܇�윥�S�љ����+�a�H�ƊA2F�,�ƞ.a�uE �U��'�xĝ�+��j�N9��O��u=h��O��Y��e����TL�����%�����gy9�&��i�PS������P���i�N���XB�R�J��M��Ŷ���#}T5�YX�H(����<8�� ]m���H�M]��BY��v��о�G�����S�M�Dr��2:�a���a��t'��J���������xz���A�s�U!�����cv$6h�`�XgI\4�UPWʯң}/�}d��u1�V;[�|_'�g��j^De������A ����Ӵ/�~x��u+��_���g=�Iw���o�JLO��H�    ���J�,���dnp���p��X��rR�p<��eo��K��Q@�c4du�7U֬�{��|/q��ڣʅ(��[��]��J�T[v��?8�m{I�{_owMUkoDN����cXnO�?��`N���P�fs~���qР�� cq�Wt�&jTI�8�<�5ݑ�}�I� g>ae�]�w��ډ.Pw�f��m��xd�'���hrh��-��a�n��R�=���*�S�l�Y;���A����c�K+N�1���vvRS�E��XA���L�4�h4�@\k�g���7c�0:���v�1h�E*��ep���'I�;߱��[���]oP�Q#1�Cc�VIPb�
����P������!l'K�M�B�SG�={l,���)�lr�)�f��#㺖���a: ��s�q�������'��ެbd�P�W̆�#B�M��C�Am���hQ*n�$���3�1�W4�< V⨗��dA<��2e�R��":n�=�����-�� ������a��]cm�pZ���3n=�s��vx	��Df?[�2�C����Ϻ��g*�m�B.��:Y�a0}SǕ�-��Zf���
K�����q]p��821�A#�1��EN�_<��d��A����_����Q&�[�۞��(I|��oи'"�2�@�%JOu6�/}/��Lݨ�{yu���QqL�و>���峄����� 6ʢ�X=ƹ_��C!�����m�Yv��������4p�&�Aely�ʇG��n�zc��,�T�e%����i� %��9���7�X���G�o=2'��#@j�/9�y�3�}�ⷳ��hZ��R�D� d�^C��u��ד���/�����Ty�U�U7?�F��������I���)������?8�$x-{�5���z+�m\8�5�uy�c4�l�$�EbϢ��څ�ؾ{n�L�L!���0.;�����7��0_2����oK�u��h��Ȟ��f�c�^��0V'BQ~�N�����K����N��ӄٝ����N8��݀8	>�]×ٶ��'�٪W�"oڄb�E����w�7�]6��dJ�m��e�Qq�ί�� �v 9�E�e��>����P�B�r��}m&,� +�8�p�S���u;_���Cej�_T��9����hnb䉊���j웵�2]�tgt��!Վؙ甠 ��-�S���2Ϛ����<��V�Ti�s�V��n�z�Gg�a��ry���)m�w!䊫�n>wd����^/d�6+!{ ۭ`��lm��K)�m���f~y¸��$�Ѧàa�`�'�oi�@�OG�cT�!�<R�i.��E��Ʃ�$'���26�p�ɞ�F���q�6�2E�?�f/�!u~(���K�M����	Ɇ 5�ZX@�v� �E�}�Ve��I� ��[}�Og��CS�p3u�l�A+n��ёE�6 6��O����6�FKZa���2`/NOOY��Y�>�%W���~�G��\����C�����0T��-��K��Ջ�+�9���O��/���0��Ӏt���_+u��&&+^�ܟO���7�O�EHQ�L�و�A��z��&kO�{��3����(t��	�����Y�[Y5kN�?	��8��t:�s�G�3E,�Ǚ�h(��ur�0�N����I��}�H��i�Y�z�ʊ_�-!=56������c@��\�vb�W����V��g��Ǭ:���ۡ+; ޒ�j�����\�}xr���uR�E�>���\�z�{k���a��45�~�Dj.�?��O�3�g�p0� �+�����_�x�$�����[^��K��-���(���I�_>9��`K����%��
�D%�v�AS����:od�D=��v܀r�I~M�x�og:�4�*�N�˺+�cq�񶈐M+/�.��}#Kz,��N6\r�8L'���:v�ʻ�.[��|g0���w�J�.�z�uNew�	��ԅv��By��a��)���z˗�U�h�O��[`����!`���x����{�k:hg�Ի<�E ��%*�݊�%�}�T��/
S@��r|�4�h2�Bu�7`�P�7��1k;�]HT�0���J�����#v^H0��ѳ"�a3&M��3�#vh��m�n�h�{")�<�J���٭'�j�qL�<�1��㉬� �5rV��`�6���`�<�(s���e��zP)�*�|���'J9翘v����"�I�hX-@�i<�s��$���K��ሉ�1��
r��!��r���ӑöng�h�i�g'���̶l.f6#�g�D���_��s�?��?φ�癵�Ξ��~j��s���5h4M	a1�рc>���ݨS�����kOê��M�xb��z�?��f�u�4�]�$�~d+���0�h��oep5��r?���cO}���N��gc4����p���G>��i�]u:F��<M[���A��`��&�Qt��V�궐Կk���ܙ&�R��Ə-0~2ݿ��������lg����꾁��<H�UgSx�l�F��`~�"8 ��2��_�����h��~2�㊆�&ܽR����F>�ŗ�S�t�pп~��ᐮR9�ng}���Yg��;x�p���խ<�1>&�Ǩ�%�XY��������Ff�A�'$��h�����TSͱT��|o^Ȗ:��-#�� ���w9
K�V�*�� �C�;���%���e/M�s���S���f��)>U%K\v�"��h�����M�
'1$��v����6$ݞ��a'��G"���[2�
y@�hg;0��:(U��R��������x&hM#�h_��nR�'2�8��V;�9?|9�{��%��z����x:6���+���_d ���b׮tp�FgaȽ�F3���ުONDU�W���Pխ����E)�_�&-�_��ؐ��wm��Γ�]�S��A����p���8��]"�$&����Q��a.�JȦ�0�NVʣl�A;���]z;�.+�|��z��K���V���|���)n���D��ݎ��g��Σ�vbx�c4p�����?�������I)����Z���E�P.��ݓ<Q'9*4�lDS�ks(���*i��澼pb�ڀ���6���yO�iN�z�ԯ�6�d�h�����Κ���֊S�ѫ��Y7��}~93/�`�z ��Z)�ɧ�P���x},fVS����ng��ej�|��b��6n�,r���me۞�=��E1��@�?�^��8�sh�U���@3n^T�-�Cփ:AIUz�TJ])�k���~x�2{��ك]�~:���ݔ�fB��M�fV��kAk����|W��!��E�� gg�'��B�OY!�Ӈ�B��E]}'�N3N�k�Y�ɫ. �D��%4�:oj�x��þXdZ�8�D�@/�E�E�mV�W_g���0����u����\-�΃�=t���~2�����#	�V�F%�9ZXN��
cG��ӄ��O���^���~i�9����ƥuN���I���G���&�J�V�#���7L|�]I�r����'��$ݱ�1n����y9��T^�yI;�N�1j�]=u������d$<6��%fs>+Qw"E{�A�^�>΍�TS��U�k�"7<�U�c4�~�����=G��^α;~<z��>Ո����IR�{]���-qr�a��̺�7Y�a�p�~��n�}!�B���{vٰ1Z�a$m����PyU�T�4K����"��{/���@	ݯ�M.��1� �:�wvQ�{�T}�K#F�EVm���X�G�#��:���J��-I�E��:g�z��%+ߗ�7��&��Ho�ᨠe![oj��F��n(C�f[[���j���1A�q����Ɏ���[�p �lG�tJg��^�'�}�'�t�,�!��$5��1&�H@V����OyI+�����b��]=ې�'�_e8��U���Y�P?�Zm��S#�V��+���v��}����X\]r#����$��7>�JGC�̉�����Ǜ�?立�狋?oo��m^�q4!hB������>������������G���I   �g���Ͱ���X�$�:��c����iz���Ŋ
g��U�$n>�$��zc�.����R����vb���	~t31	���Q��r�=���~D���I*,�"�1x�����6E�s�/��YH(�Ç�h@��V6uzEB\}zG{����hi/g'���0c0��y��$ҍ"�_��4�PG2Ig=�e��<�x/	�4%S`�A��m�L?��"�L׬+df~!��O��B/��χ�5׼�uC}��5'��@��h�Uv��L�v�h`&luu��l�G���a�it� �z����ai�4����}�%��"�ƣ�G��
۩$fW%�Ѱ�6�b�d߇&g��\�=�����-��e���3�iuV������=C�Ҩ}.�.�~�ROx���x#�S�Џy)��Y�,��㣃驌����ǽ��J"�\I�b�0�>Y�5�mu&0���I�4��.?e��ܪb"�J˕���jͯe�h����/F��+��z��������4LP�>����7���%J8N4����Ȉ���w�L��5����n��SI�j>���A��e�$�G��z��0l砎N.2^�Ƿ-a�J�5h�9�uO��k�¤�P�e�a�x'�C��H���^���>�ܬ�eF�ą,�TkGJwEj��I>�U+uX�:���f/+H��֢�6٦n�+�&��6��=��]���fz�A�`���sg�y����=�~�g\�/��x�qRG�h��4��o�ǲ���6�DE�M\�dR��l�{z����Ry9������A�k|E�m���[���h`��>��&��撶��q��vdꎤ��HT�<��m1��q��9�heWtG�F�9Z��B/򶕶x��T�j�/ q֮�<YEtb�?y��"C��[&EI��o��y�����}+�\�1����8;M	ey~��BM��K��z�+ �,�ԷN	���!���̶<��gCo GP��(�R�uj�E,d
���7�o4�d�u��&�Q��;ّ������d�'u�p�h�B�Ϋ,6��1���:Sfzo����l�@-p���/?�ܸ86740"�����t�i`�	�9f*[�̹��"y�\��Z�1ړ�{�8bB���P����ڻ��<ދ���2�H3R9+U����9��kz*�����~��ux�Ee���يLZs�q�}�C��[:F/�N���dq~>����36��@1J���;�|/܉�#��	��?�uÀ�v�����������|�l�(�UDCi ��Pt�ϺZ�e��f���@?\��+Kkyvn���fs�L�?bi��I
�|�{m����,��0O@8~�mƩ�P���7�;�:S[����.���k匃޲����\\ۚ��ޘ.내K7[���֧*���x��({�L�Gi_瘿�Ed,L����+r�7&�U|�}E��%�s���l�sO���w��a��lry2�O��L�0:��*R��}C�'4��S�9؂���}_��of9i]���dp����+�����t�/�y�H����j^`��m����Y�6��dJ9��X��}_ᦇ��N}�C�1�h�츽�j6-?\Y�I��Ѩ �$�̧wf��(W�����3Mr�ա�@�V���!�2#Ӫ��!qb�K/ru��0`����Բ@Wn�����|�R������G��"������/Iұ �A��"�Jc�ɢ�En�S��_�;��=9(��Hϗt��1AX���/ɚU^	=I�1F�Y����i�C�Xy�����7W�O��G�2?u��&�쎟M��O�I0<��$n�l|���_����������r?F�����݋���A��[�2/��N40�H3<�C�]���Gn��$��DYἿu�`P��;���Z\V,��~
��$��6+���3��$W�I��R'��y�%���-��?]PLO�w�ٿ�QLܢzS7JH�A#��;�Rjwh��b����%^����s����ru�^w��1N�+~�~G��Ӗ5��,�x��e�ᜐ��U�Iأ���  }�n�<N���*�����[�癰7J�Q��Pq'�G��R��z��d��ʎ��3�X�I�f��if�028I��Ҹ�s>o��~�d�C��h֌j�����	k�,�R���+=��@J�NFBw�B����-��>މl�$�Y\�糟ډ�y>��B:\��?*#���&Ǳ�d�?d�`.i�s�uC�^�\s~_�.�{.'�r%_�����!pU4p`��B�/��o���s~���%�n�L��Df�˳�_�iW�ڬ[�>�ϯ��;�	�t���M�[����9����#��W�X�߿�Y�������{}i������5�+O���>,n�D>QDӋ���^�O���O�+RP>�h턮�nJ��!Ƚ�b/r����~��R��NE�\���t`M���B
�6!Ad;�Q�W �`���eH=��4�7b�a�W>���n�Hef���Q���&Y���Gڴ]�Ҵ�*=@�UB�C�mb��ۢ�^��ǯ~��E2S7��� S�]�"�ӟP[�d�x#�/��%a��Ոh�c��$]�^�1-_�����B'v|�;�n!2�uHN[��Y]p6a��2��W����E;��������ga<��(1GB�����Z�[}��h���c�,�k����I�`4�t�6�mݥ�\f%�<���=�m��������2rbc�|��;��Oy�$8ҝ�W�A���~�����i�t      H      x������ � �      J      x������ � �      2      x������ � �      L      x������ � �      N      x������ � �      B   �  x���Mo7����0�Г����m>�v�$h����P HM��R�kjVMJ �����3����Q��J�x�ᯋw���gϞ<��zqs��~����?��W
��e������+���[]Xc�j��.�����|�ğ�8]��:Z����j���y��z�jLM��G�r��W��ȲR��v����y�e�mu�1���m�|�+ũ��
��>U�:_����j��@�D����jL���lD���0Հ�!|��;#��;=Հ%`��H��u�z�ȩSH��_�#Mu�'X��76���Vߦ���_����5`�)�flYS^}�j��Tdt@�hg[�,�Eц�HK���O5`�,2Ƭ ��c�j�%���[����p3��ѯ.O5`�02���`⑅8Հ�˂N�{��[p���1O5 �`�"��WW��pX0W�k�#�SXq�1I)��I��b�G���Pi��a�\URJF�4`�`�*&e7�����׶"�xBDu��Ec��/kpSX8,ӌ W��h��8�X�:���V4`�htY��S�j��e�>چ
��J.�F�V8��`^��E�-"��O5`�h4� 8��=�k��e�h�&3צ���?�ˢm����k�jX�!��7��uZvH6�vD�b���C���&Q�j�"n���F�X�������Q�Dkhupɫ�N���T�5�\�l����ꓞ�jX��$����������4��2i�\*��#,�l��E���HSXX.}�����Fj����)�TCK#&�c<LǷJMѴ,�"Cۋ�.wZF��`�[iS��ր���߂���h�,�-�������w6Z�Kis��hX8.��҆ ��5`a�l6I��:?(X�$��RG�����`�l�Tv�c�j�b���7-]���{��p��}9׻����{��y����,�W̉�ࢻ��c��ۺ�N�J�+F�	"�!��,�W���B�SXx�������Ҁ����{���SXx�k� ��/�Q�L�+F��+�9z�Sk�"n��}M3��ͻ,⶚��M5`��`}�~���5`��첞�F;�4`����SO~������.��e����F;Ȣ�v��jX�G�V��1Nq�]*XԌZ��q�����}�8�H��LߥOvQ?����bь��L5`a�f,�~��R�Z��u��
E9�aJ�5�Fpmn��-M5Ო�q�kc´&܌���DgP=�]n�fꋾ�
�ք[��%����:���*ɪZ��9�\ HcZ�����ﱊLތ��/��^�����-l�}v����w���������7O�~�zz�޽by���[��3�.Z��V�����/W�|����ϟ>�!�.��O�$7�D�?���D���|�W_�&�rF�S��,QX��^uDz���Ҍ��n��a���(,�\PD���)OQQ����+��n�j�"������f��Y�ր��-�w��րEjv���!x������
$-h�!�*X$fgL���6��,򲋛�^���V�Ûn�Ḙy���4y��kGd=���H�\z����y�O�k8n�qm� +P.N5)C�W���`a���dσ�x�׮�����K?ݼ�}}�b�n������c�<{&su�5�e	x���N�bǕX��ZN���1fsv�^VK�T�k��b�RC�}�ϒ�&\�o�/�Hc"P�p�`�;k6F��Z.2�q/�A0�@�	)��~�-��6Yk�E
��;{=�W�2���H2�8�F��e�jٽ��a��˧�d7�c�6C��d�J��hȰusz��4�"9��/���s0l7����c�)���]�0T�~��j$�5n����;{��`Y�_O�g3j�k�&�Z�Jvs�k]�aw�R����8��{�:#V��@k�E
�]kq�I��A����\v���G���Y3M�|@�?�/�:�KP����e:6}x��]����З�WU�yøŪ3���oZ.�q3Tg`ka�j��>4��錔�	�҄+�h�P4l�,ε\ϗ� D�=��� HN���z�4&��&\��`�������x�&\�ㆮ�цٍ҄+:��.xA��Ӛpai�F��Hc
R�p�b�.���@k�B�γ�x�����4n����:դ5�;���:#D��5�ƍ_��^"ךpaH���HÎE��Vc\�h���V�0՘������ �k�      F      x������ � �      D      x������ � �      \      x������ � �      X      x������ � �      <   �	  x��ZMo7=K�b0g{��&�7E������;+d��Z� ?��=�"�أ��?��d�� '��&w���׋��������o߽9<�! C�����錋�Mzm�Τ��9F�ph�������?}�x��=�3sH*F��8|���a�����`vve�<9�6y4�q;3�.�>�LD`�A"+g�U�2�A���	�y*��hhh'�nkU�h�/��C���v]�����^bIt��*�'�ٴ$ƙ�\���c�e��w&Ξ>�*�Hn|�<:�)$<�����'Nօ!C�#�0��b�@ ����Pf�T�
7m1�H�^�� ��-�`(У5*���4�ɕ�����gz�+|�f��TL8U���xb���XCЃE�َ��h��ՠ���&��}O�7]P1$��)vR �*D�i�tu4Ʉ�[ðɰ���"��4��7�L�r���Z���<��:�3��e���x��)�<�d�WLa��U10AGS9�4���F�������?P10 �����ݙX9����*Hg�T�q�Ń��^��^_���Fp8k��hM.8#b[�}}�?\=�]]����)J�Y��
j�1)3�b�4�SSF��bN�e�*6�Ϋ�2������-M2a��X伽�"��W�a�y�j�NlcJ�Z�.��쎋���9u����lL*P:�����㿟����/��>~}����_�=�����N�����p��ek��xF��p�Q18,��Q��U�w���ƥ�%҉���χS��!��h棊� .�3F�v�9"[Jc�E��].i��ByY�Y���.����U^�`C*B�sC5-���>Fq�S^n<�RU_�%�q��aVJ�1�!���Zy�P�U10�,����K})Sb�r�X�su�\�İ�9�����I��=�ζ�Y�u��W�rx�_��nˏ��IŰaXn7
y������U;j��d�0�~L����NC������4�����F
*\�cCPa�LS1 ��i� �W1��RH�J&����Yr%��Nl�*�� ��*�l��#T�V�@��j�p�?5�#\=��a��YI(��֮b�*�İ��G�T�#�U5��K�~C4|��p��5���X�%���G�(S|_�p����?wo>~{}����O����?Fg^��)z�'(�����
��q!`8iX�H$h&�+,�<��U=�W����VL.69S``�x�Њo&���<b�$𧬺�F��$Xq%b�Wު�jL�}YP10�#�(f/�����=o��ז�nGb`���a�ER���p���&�$��b`�A�|N�T������YW˖�aM �A,���GGͻ�� ��@N��?H*�b7
66|����@��� >[:1<���뫇�ՎB���w��߯��0��<��UC�?���E�(1X�/��:��{gT���Ĉ��K�}<PAUlq��k�0ܞÇ�HF�>U%rNo�7y!�<���i���-1в�����M�-106�Yw����<�K�|�tDD����Uڔ�REhk-�|�Lb�t�$��^v��<Z�@�Y�Z���H�f�1*p�`� ��"�ѣ�$�5��b(�U$�4I�]PIY"aN���չc�Պ���Ғh���[c�A=�ݰ��s��K�5�C��b�f����(��ғ��c-����e���BJbl4c�j&�u�] ^���$Ɠ@3vX��]b�˷�.��BF6��duc�_H�^�e� 1�Z��`e9I�&��éSAQv��h��Q���r�r�^X�P~�sA^UJ����W��__��|�U�ĘZ�j'���"vdm�Me�y�$7T�_�Lp*�P��;��˶�(0f����vD5p�ܱ�|�%�:c��}�[V��*�GLz�x}G��on�qǽ��;�w�E��BI�x���+��U���_�ϸ_�n���1!���N3A^n����p&K$�� /7,����IŘ*r��*cX�-��jk�>�v���8����5���<}y���7���[��ۻQϲ06/��%C�޼ı���T�� ���H�a�ŭ�(J�bLe���#%ru��H�y�$�V��\�`�\PR�v�a�Q5;���)>��+ ���hxt��=�3@v~�����&���@v~X���gX2�� ;?���K�Cc� S	��|#�3@aX���.2�>T���ٽ����T�(��\ѯ6�(�6]�z�}�����Ϸ���p����S�"1^2�诣�o��1d�s��o�UL�؊1\<�Ѷn�S&{zUǎ�������C�~\blt��q����S��wcPLHzZ���)*�dOؐrdj�R�Ç�]^^�	�'��      f      x������ � �      0      x������ � �      /      x������ � �      h      x������ � �      j      x������ � �      b      x������ � �      P      x������ � �      '   Q  x�u��� ��3a���ˤ����{�P�io?rט�nU�T���A�����c�.�������� �@��эϠz�~�c=P��45;#z�7����@�b9�$iF�%����/�ը�̫��{����Cb~��ѧ!����*�U&Rjͱ�i
9�-�*]�&ԂM=O�-d�uX��z@]4��t����@�R�>�#_���p�kaȍ��/y��v6
��υc����Qi����^Q|C�\��.�uj�"�}q������*T����̙n�NX���ܧ2����
�Z�����P���n�Ʌ�P�GQ(Y���Ҵ�� �Δ��&��t�ŧ�y�,lpR����җ�w`d����[��_��=�
�J�	rr�r��/��n���\i����iC-M�z���]�R���#����y.N�*�F�� 
Q+����\���_Z���1_��)	�l�^u��э9<Bޙ7`�(��!%)����Y�|?��6�k�Q}]�����J�bL����J�`�J�uK-r�Ww,��W��.������ַ%�_�#��  ev�      ^      x������ � �      d      x������ � �      *      x������ � �      R      x������ � �      +   ?  x��ˎ�8�ו�`�-���j�"	���MC��l�%�`r%��ǩ�iu/k�i���9:��}6�s^�`�.���8Ng�)>~�=��X>�sk�OOƓ��ϲ��'����͋�,K���Mw� ���"	�1�"݌�giܶ� E�J�/�f>k���u����Ѻ��"���Ҵ<6�xQ��[YZm��#���F���ޯbc�,9U�,�3��͘�F�uR��ܳ�6v�<Vw R��^�RK�Y�#'���xݧ�6�{,�욯�ՙP���§d���P�Ƃ�r>�������nY��w`j��u�n�����C;�2Sw���k��6�5�k��74�o��_��BSʣ�Ե��os�u�1���;u�{\y�GAP4n,ΰ�j��..�����>y�(�zRL]�tU3��Y^���Ֆp�����i~�r�2)f�2�{�o�|�O�b8�5�-"(�)�|�1T ��9透�
΋5���$�[>�㟖o��=�0Mx��%��=UOg1,���2���1w��[QO5��)��SW��S�v�}л�6�{�d���C#����y�2K �m!b�&��$��ޣ��:��7�v]R��ZREÄ����G;��k�����CuP�3��b�c|u��.�N;�_8yso筻�nm�j��������d�G���<�F��� �0�'���	q�2c���p�ZяB1�0�3�+�����5]L��r���S��~Y�����â�ȝco}d��~�"� ���C�����N�D��9B5�"5�q���C��_ɞ��a��w�[�����`��'�      :      x��]]s[7�}�+�������y��|Ub'egv+���M'�q�%�f��o�~  .�KI)'v�-�<��t��W:aR	��B<ba�%��(I/��W�?��������7��^���-���ҋ�����/���������~������?0~[��������p+!�"����eR��Yk�D:t2��L���9�~�]��+>a��AP����h�����z��������ĚdK��Q*�D�����������\/(�)��8��_V��8~�8<Z�6z�CK�h��sJ���ͦ���nb:o?���vw�|������/���X��������i��\�~��m�=	��&zy:�˅��1�ゆ$�iI^�k�Z2����`��ӓ,�W+Ã��Ka�R��h� R�iϥ.�����S����;��'�(~���x�/,�(F�naj����4��T���w�=��D�#!d�פ[2F�k�}�h������HiB�n�K�JUd%�A�_w&鋇6I
�W�������~t�$�D���맗i���Ԋ-��@�Ҹ�Ş]2K�RL�|��I�d�(&~�<�����2�,0��,������<�9�h�rl�􈜍B��{�n�������$���?X���먆�U��������3�J�[-�����b0�%����e4�EEϞ]�������T��6�(�q�^@�����'�(����]��5OV�hݰ�@�+h����I�d2ڒ�r`�Ȃ�������v�
I��QjV�;4�7��-����؎Q�(M4e����m�z�'�V��D�)m$��8�g#;#y���$�!6d�� nR7'[i|�/.X�yH�aQm,�q��	�����SX݈��Z���A�]����
��9�:�����ȧ���Fk�+�F�`�Y�U��<�i�{�r�2�l:�\�A*�y��ZҨ�����a~*�`ɯM��(�
�ٞ,���\�C����GK����$�N5�ޚ�vC9�S3��>�F����v��&P��McJ���&�����0��*��(���^lϢ��A�&�ݴ���H�^�.�7��o�1���0���"/�cQp����:L��ͷB�cYer���" �<�V��Z�Y�juk���Z2@ü"�t��>�d��T��k�-����ýM�j��v1��kɠdUX�. ����*p��n���j�+�i���f��a�LV��$6�O%��m�^����-��+��?�"����^iŲ!g+W�=v�d�0�pTd�u��*�om�v��d��:���l�;gΣ��~wAj'��h�����oɀ�ǅ���@V�8j6s��<����`i�;/4A�DDa:��]$�T��N�x7���MW;�M�"Z��b��C1�5�����E$�>F�i<en�Zk�ݒ!y?�i�h뎳T�[���n�\I�palڟ��E��G��~<;�8��M������#����T��L�r��u�ۼ���p��m�}������j��v��mn�}OIC8�#E����@e�VE?pm-MAN�x��?����*9�(�@ک��M/>ἥV�M����'��4�h֌��sv��gm?�swL\�tjɠ���ʊ��û~���݇�f��=ckH�l_X]"����/�҈
lm�K���x�{��Ҵd�	8>,���֕*I�������$U��T��ǜ��
��b���	�ˋ�a�6�+|~X��	�7��.����z�������l`f:�QF
o�a�*;ĚETn�q:X���9�0V�܃�P�-<!���Yʐ���n���ۡ��� %dZ�OW}�ݧ�ކ1�e��Jf$������h�臣�҃�("�Q�8&�7�-���#���a�W0OP��M.�M3�[!�ڍ' g_(�l� ,���n��z����K���0�ĶQ`gϳ��܉P�]�i�p�/�q���Ӷ���	l�ɤ �J����N梷&}8sNv��+�_J�k��x#�H��DrT��PiZzx����)�� 0G��9:���?���kIˤO��5�(3*�h�L�)���.q��F�(���o�[��n����������f��.��ݿ��w[�R��F�A������b�x����%Q^�G�����k�3R[$�C�8l�0��P��r&-��m#}Qס�� �A����3�1N���\�����G��ҕ2):3 \:|L��]��`�s��N���$�A �8'�Hl3y�*3�J�禬].�t\@Ϫ �$��~���F��hɠkzpS�Y!邗�` �!�o���i_҆\)��\Pp��a䟲Xl�<�A���ک-u����<�pLG�F�|܈Fh"�Z�����P��;3�A�6Vs ��/�j)c����o2�Z2��I5�����2�/&s��d{������f�x���k8-8"	��Pi9HS�g읜��E�>��7��#���+~Atn;W���)/1�r*����Fhɠ�6C���B�*:-3��O�~��oˢF�:�V����2�cyW����i��9���O^]���/�{������a�x^6�߯��,�5��_=���{�L9�\�߽{w�f����+~�>S8��>y�eʁ������s����X"�g{o�Gz�s�d�EP��62����Nl�Y�߭��t�M����?��~��~�km�������FJ!�c%O6D�JF��8@Z��fslNN�����K��$�Z�E��d��h�c�q(�S��C\�x}�~s�ܾ[��u��v���v6�(�ra�R֦,��*UxT�bI2F����~�h��iŉ�̃�LE �7��x����^�L��b/qTb�Y�fA4���i��c�	�!�a�j���`޶%�	�[�������A�6�䑝nc�(i��霌�W�� �yi]�"����0���u��0_M��ВAM�lT��
C!{Q�`Lc}�� �d��޼8��G�y��A
=�s�aS`ےA�x�p�يb(�NH���4!;S�ڊP�μ���ɏ*�qh?��_eQ�qX��&�d�*n[W�8��s�s�Zp?��)ؚy
�|��S���]�	k�-0���j��U�Cݲ�|���ckT�Z��H��W;SaBUO?��
y��-��`oޕ��ķ�4�V!D��IU��k]�/��g�w�$J$�8���J{3��GY����݃�|���z��t���M�q�V�>$�T'45X��=��\�T�	ے�J��5�=��=�����_�[����Xs���H2l���f�s�<���f&T0$�{���>e�@���}��H[i�Y�7m������Q��?�ML������ss7!�D�8"��(Ҿ^�6x������;�8_9�Vv��A9 =�}f$=�����욭Iy��F@6���`�x��� �N�>�����m ]K�$j�b���t���J&L�e-X3��4��"l�0k$��=����0�҆�壴6ԒA���q��ж���'�ʓ��K'G��^~uY�&�!+�ƸD��\9��n�p�/�a�JV�c�u��j���Y� �p�����
J(��!�$��)�R��^ّ85�$46�w��>��k����|�c>c�;~�_�	G���F�t���Y���<�:ʠp]��z߹�s��4�?�~�>�S�A���k�.�r�O�0_�M�jɠ	�[6�jo1H[q�V�%�E"���72a�����P$�U�F�x�&����W@�7ȭ듄�
pU��'p��ܶ"��?j��:�V�C�*�#���l����@��^K���PF~��Ɇ4�CY1^�2<�Sk?�̩i�OmLK$`�.��7^�9힖0�I�d��n�X�a�Y��%��?��Ԡ��%R�W\2�}��	��NG��f���r�j��������S���:UK�`[ηc�)"�Y���Et�'YL�4��X����Nh ��e'�P�~�ݾE�6=�Ck��ϋ���<\�-�,S{,BIچ�¤d� w:�D��U�_�zqq�
�ߔ�ݙ�.��eV�=�}"_N���g �  }����9�h�C<J���Ø�����������"��:�.��\Qf�*aO4#���/h���p�.Kg%��e�	���+3���&3c-焽�>��l8S�T�)6'���>��&��ث�k#����$7GZ��ur�:�v�B����4���n�`AP�P��i.OIyF��ă�)�Z�cJ���D֔�����7��`��&ƙ��Q�fG���[���g�"j��v8�ܕ�M~�"�1��X���zs����(��dmlK ���(����I��
?n$��RU��'����(�L)��fÓ��xB&)�E�ɀ�ӷê�1pb�\����{Z�mFa�-`2�p��^���^X����|FA��	��G���vmW#!��.���zHR���N4V&�є�(��'`�� �����}hR��^�=�6�}Y�xC��ill�M���ٍ,άG�x��C[��V&��A)�kɀ4&�wGZ��28or���T�-p��1�gO������38��>	l�<�[2��	y���`S/�6���R3�ʕ���-�D
�d�ZU��ڰ�v�"����>=�"�X1T`��U�R�襰є0��/���%��∄���T�kV��;e��K��NL'��7wˋlP7o����Q���Q��Z�'�S�
��^�+DZ�7g0)�ޥ���4H�<B����f�����}�:��oɀ�'dY6s�9�#�L�'��-P�����Ϡ��2h�k�,��"�}�8���mj���jk��E�J������d@������g���Ǝ!�KF����]��ᠩ��g�䅊�3�BJ�&��T�񚧱�M%�V�қ��/9ٔj��ͫD:��?.~H���2pXLY�~���F}T0<��2��� ��W^�Z�*�:!.��r��m���ez�� �"Q��B!�v�]D��$�1��l�#0ζ��;��L��c���g��2P���d�te����C��h�l���#p�)����N��*5��y9O&cD2���oys|^���H��C~��ɀB�ݛ�Sb��T�2NKM��!�,q�JrQ�+<���\xT�3�)�j�ਨ�����.+�R��R�"�����-ON���E�E��:��ِZ�(k���<P^�j���=
�ʮ�//�]�z���~�Ì�*L�h�dPA=����l����0"	�'{��Db#7s�'�z�<y*V��<�L��vl�����ssA)��d2�b�AR|��%v?@Kjɀ\C6+�?"����ni[2� אj�L�fB�vZ��v�9�B/��*]�!�B��S��֘A,T����X�2`����kȧϦǖU�Y�O�<_�k�CIY���:�0|3ղk��vN����4��4d�Ƒ�*��<z�&�p/u$�d�ܸ��6W�2r<)S�3�Q���"^bkU2J�ǒ����s��,%��ҽ9idr�L0�1�P+cb-��{@H�DP�Y�L��%r�07��w?Mt������������6���f����7W�ov��������
������dX����C[��K�U��嬲m��/=�w�#\�ukZ2� �E�z!KtNM��Ϟ9p#�ZP�a5[[̳��c� �P�1f��G�?d���4L�^L��!5���K�'��+��HI��c)�:W��ܨ������d@ZR>6K�I:4ތB�5�����ח���������
�Ct9��Bl������$��D�+He5_&L�&=M<u��ɜ��_�;�{�}s���w�U�k�ra�ϞV�L��wz1<�$���d2��ɟ
6���ZQ������7�\�n�l��}�l{��us5�8IA��?�������s�e;_��d�yBu޺-�A.�v�4�{�|z���e�׺�������9�'$g���۾}�:p���7l��	U�C&� �l塵I�H(�zg�ͬ����b4�+�yH�p��i�6Ü6x���րg��e2�Gq�g��GJ�D<n z?0t �]9���U����p7�u���ɣ�)Db�{��vU
y��t)�dz��.VAJ�ݒA-2�V�������5v!/�KLx8 �&>J��(�I����(8�!��f��	�(��x@fϢ�̀�-�����b� k.@��Z2 ��&'�����b#r%&0V��\���fJ���EJk��ʧe��(�dO����_��M�$3�A:=D�3�Y�Kժ���������T���{|�ƃ̥��W�2 1�����,��މ�m���w	{]�$�bƦ���D�
`'@�"*���Z�{�a���!��CR��r��e{-���y��O�ʁ�2��!�p�8a�lz��"����w�w�{�͗�pyY���*6r�M�N�&)�"���Y��}��G%bPF��U����핹N����&�+�S�α������zzl�(�tF��6�޿��[.5Pq���o�����!cBw0Iw������V�Z<
�9g>�	����f2��@�$�	�%��]]w��6w�(LNMv�;�F�ϩ�d �T>��_���s�0@Z�����.���0&�x��p!Q��Qt�H��J� ��6����'K�`��C�"�5��ǦE�s���9��@��y���?�c�(�k&���2�y��qk��b�Ek�Ll�BZ6�П�ѵ��d�iP��(��ʴ,z�'�Sk9��E�ȝ�-<k)����Q�'⣂����<+�� g�LH�6����؂��q��@ct�Lֶ2y�X��}n�!�wv��o(�&Lwܚ�PR�|1�!Ȍn���!G ��L�����A'�8�>e.4�kG�ɞీ��<Ӷk��zr����7�����/��$GO>u-ƃ��~a��t�X@�P���v
ᱝWtyW�k�$uK�2ޗ�#Ϟ=}����UG@����cN�� ��xxK0�xps&{��PSњ�pF�lu�z�t)ؽ;���Y��!r������@Xt����������UV��/���������Y��	��-ٓ��>y����[�       Z      x������ � �      V      x������ � �      T      x������ � �      )      x�m�Ks�0��u�,܊I$����E�N[�"J4!r���k�i����<3g�WӨ�d'�YE#yN+A��G�)��`��w����d�GQ_��9͓,x_��N�����[�U�16��,
{����օjAa�L���ǩ�����i�`�h9!��6�i�}��g��.+l��(�*���Z�>a��/�!��V (C򳨶������>���fCQWL��rW��JU"^�x���W��E���{�٧l�o�7r�G����^��Z�e���n3i�H��?Kr�     