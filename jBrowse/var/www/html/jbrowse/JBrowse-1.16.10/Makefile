# This Makefile is for the JBrowse extension to perl.
#
# It was generated automatically by MakeMaker version
# 6.66 (Revision: 66600) from the contents of
# Makefile.PL. Don't edit this file, edit Makefile.PL instead.
#
#       ANY CHANGES MADE HERE WILL BE LOST!
#
#   MakeMaker ARGV: ()
#

#   MakeMaker Parameters:

#     ABSTRACT => q[A modern web-based genome browser.]
#     AUTHOR => [q[Eric Yao, Colin Diesh, & other contributors]]
#     BUILD_REQUIRES => { DBD::SQLite=>q[0], Test::More=>q[0], Capture::Tiny=>q[0], Test::Warn=>q[0] }
#     CONFIGURE_REQUIRES => { ExtUtils::MakeMaker=>q[6.30] }
#     DISTNAME => q[JBrowse]
#     EXE_FILES => [q[bin/ucsc-to-json.pl], q[bin/remove-track.pl], q[bin/generate-names.pl], q[bin/maker2jbrowse], q[bin/prepare-refseqs.pl], q[bin/biodb-to-json.pl], q[bin/draw-basepair-track.pl], q[bin/flatfile-to-json.pl], q[bin/new-plugin.pl], q[bin/add-bw-track.pl], q[bin/add-bam-track.pl], q[bin/add-json.pl], q[bin/add-track-json.pl], q[bin/json2conf.pl]]
#     LICENSE => q[perl]
#     NAME => q[JBrowse]
#     PM => { src/perl5/Bio/JBrowse/FeatureStream.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream.pm], src/perl5/NameHandler.pm=>q[$(INST_LIB)/NameHandler.pm], src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm], src/perl5/Bio/JBrowse/ExternalSorter.pm=>q[$(INST_LIB)/Bio/JBrowse/ExternalSorter.pm], src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/FlatFileToJson.pm], src/perl5/LazyPatricia.pm=>q[$(INST_LIB)/LazyPatricia.pm], src/perl5/Bio/FeatureIO/bed.pm=>q[$(INST_LIB)/Bio/FeatureIO/bed.pm], src/perl5/NCLSorter.pm=>q[$(INST_LIB)/NCLSorter.pm], src/perl5/ArrayRepr.pm=>q[$(INST_LIB)/ArrayRepr.pm], src/perl5/TiledImage.pm=>q[$(INST_LIB)/TiledImage.pm], src/perl5/Bio/JBrowse/HashStore.pm=>q[$(INST_LIB)/Bio/JBrowse/HashStore.pm], src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank.pm], src/perl5/Bio/JBrowse/Cmd.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd.pm], src/perl5/IntervalStore.pm=>q[$(INST_LIB)/IntervalStore.pm], src/perl5/Bio/JBrowse/Cmd/NCFormatter.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/NCFormatter.pm], src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream/BioPerl.pm], src/perl5/Bio/JBrowse/ConfigurationManager.pm=>q[$(INST_LIB)/Bio/JBrowse/ConfigurationManager.pm], src/perl5/ImageTrackRenderer.pm=>q[$(INST_LIB)/ImageTrackRenderer.pm], src/perl5/TrackImage.pm=>q[$(INST_LIB)/TrackImage.pm], src/perl5/FeatureTrack.pm=>q[$(INST_LIB)/FeatureTrack.pm], src/perl5/LazyNCList.pm=>q[$(INST_LIB)/LazyNCList.pm], src/perl5/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm], src/perl5/Bio/JBrowse/Cmd/IndexNames.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/IndexNames.pm], src/perl5/JBlibs.pm=>q[$(INST_LIB)/JBlibs.pm], src/perl5/GenomeDB.pm=>q[$(INST_LIB)/GenomeDB.pm], src/perl5/JsonFileStorage.pm=>q[$(INST_LIB)/JsonFileStorage.pm], src/perl5/TiledImage/MemoryPrimStorage.pm=>q[$(INST_LIB)/TiledImage/MemoryPrimStorage.pm], src/perl5/ImageTrack.pm=>q[$(INST_LIB)/ImageTrack.pm], src/perl5/TiledImage/DBPrimStorage.pm=>q[$(INST_LIB)/TiledImage/DBPrimStorage.pm], src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/RemoveTrack.pm], src/perl5/NCList.pm=>q[$(INST_LIB)/NCList.pm], src/perl5/Bio/JBrowse/JSON.pm=>q[$(INST_LIB)/Bio/JBrowse/JSON.pm], src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm=>q[$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/Parser.pm], src/perl5/Bio/JBrowse/ConfigurationFile.pm=>q[$(INST_LIB)/Bio/JBrowse/ConfigurationFile.pm], src/perl5/Bio/JBrowse/Cmd/BioDBToJson.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/BioDBToJson.pm], src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm=>q[$(INST_LIB)/Bio/JBrowse/Cmd/FormatSequences.pm] }
#     PREREQ_PM => { Bio::FeatureIO=>q[0], Pod::Usage=>q[0], Test::More=>q[0], Digest::Crc32=>q[0], Hash::Merge=>q[0], List::MoreUtils=>q[0.28], Scalar::Util=>q[0], File::Temp=>q[0], IO::File=>q[0], IO::Uncompress::Gunzip=>q[0], Fcntl=>q[0], Exporter=>q[0], Devel::Size=>q[0], Bio::OntologyIO=>q[0], File::Next=>q[0], File::Copy::Recursive=>q[0], File::Basename=>q[0], Parse::RecDescent=>q[0], Bio::GFF3::LowLevel::Parser=>q[1.8], File::Spec=>q[0], Data::Dumper=>q[0], Storable=>q[0], strict=>q[0], DB_File=>q[0], base=>q[0], File::Path=>q[2], Carp=>q[0], Bio::SeqFeature::Lite=>q[0], FindBin=>q[0], Bio::SeqFeature::Annotated=>q[0], URI::Escape=>q[0], constant=>q[0], List::Util=>q[0], vars=>q[0], JSON=>q[2], local::lib=>q[0], File::Spec::Functions=>q[0], Bio::Annotation::SimpleValue=>q[0], Getopt::Long=>q[0], DBI=>q[0], POSIX=>q[0], Bio::Root::Version=>q[1.006000], Bio::Index::Fasta=>q[0], Bio::GFF3::LowLevel=>q[1.8], Test::Warn=>q[0], JSON::XS=>q[0], warnings=>q[0], Heap::Simple::XS=>q[0], Cwd=>q[0], DBD::SQLite=>q[0], PerlIO::gzip=>q[0], Heap::Simple=>q[0], Capture::Tiny=>q[0] }
#     TEST_REQUIRES => {  }
#     VERSION => q[dev]
#     test => { TESTS=>q[t/*.t] }

# --- MakeMaker post_initialize section:


# --- MakeMaker const_config section:

# These definitions are from config.sh (via /System/Library/Perl/5.18/darwin-thread-multi-2level/Config.pm).
# They may have been overridden via Makefile.PL or on the command line.
AR = ar
CC = cc
CCCDLFLAGS =  
CCDLFLAGS =  
DLEXT = bundle
DLSRC = dl_dlopen.xs
EXE_EXT = 
FULL_AR = /usr/bin/ar
LD = cc
LDDLFLAGS =  -bundle -undefined dynamic_lookup -fstack-protector
LDFLAGS =  -fstack-protector
LIBC = 
LIB_EXT = .a
OBJ_EXT = .o
OSNAME = darwin
OSVERS = 19.0
RANLIB = ranlib
SITELIBEXP = /Library/Perl/5.18
SITEARCHEXP = /Library/Perl/5.18/darwin-thread-multi-2level
SO = dylib
VENDORARCHEXP = /Network/Library/Perl/5.18/darwin-thread-multi-2level
VENDORLIBEXP = /Network/Library/Perl/5.18


# --- MakeMaker constants section:
AR_STATIC_ARGS = cr
DIRFILESEP = /
DFSEP = $(DIRFILESEP)
NAME = JBrowse
NAME_SYM = JBrowse
VERSION = dev
VERSION_MACRO = VERSION
VERSION_SYM = dev
DEFINE_VERSION = -D$(VERSION_MACRO)=\"$(VERSION)\"
XS_VERSION = dev
XS_VERSION_MACRO = XS_VERSION
XS_DEFINE_VERSION = -D$(XS_VERSION_MACRO)=\"$(XS_VERSION)\"
INST_ARCHLIB = ../blib/arch
INST_SCRIPT = ../blib/script
INST_BIN = ../blib/bin
INST_LIB = ../blib/lib
INST_MAN1DIR = ../blib/man1
INST_MAN3DIR = ../blib/man3
MAN1EXT = 1
MAN3EXT = 3pm
INSTALLDIRS = site
DESTDIR = 
PREFIX = $(SITEPREFIX)
PERLPREFIX = /
SITEPREFIX = /usr/local
VENDORPREFIX = /usr/local
INSTALLPRIVLIB = /Library/Perl/Updates/5.18.4
DESTINSTALLPRIVLIB = $(DESTDIR)$(INSTALLPRIVLIB)
INSTALLSITELIB = /Library/Perl/5.18
DESTINSTALLSITELIB = $(DESTDIR)$(INSTALLSITELIB)
INSTALLVENDORLIB = /Network/Library/Perl/5.18
DESTINSTALLVENDORLIB = $(DESTDIR)$(INSTALLVENDORLIB)
INSTALLARCHLIB = /Library/Perl/Updates/5.18.4/darwin-thread-multi-2level
DESTINSTALLARCHLIB = $(DESTDIR)$(INSTALLARCHLIB)
INSTALLSITEARCH = /Library/Perl/5.18/darwin-thread-multi-2level
DESTINSTALLSITEARCH = $(DESTDIR)$(INSTALLSITEARCH)
INSTALLVENDORARCH = /Network/Library/Perl/5.18/darwin-thread-multi-2level
DESTINSTALLVENDORARCH = $(DESTDIR)$(INSTALLVENDORARCH)
INSTALLBIN = /usr/bin
DESTINSTALLBIN = $(DESTDIR)$(INSTALLBIN)
INSTALLSITEBIN = /usr/local/bin
DESTINSTALLSITEBIN = $(DESTDIR)$(INSTALLSITEBIN)
INSTALLVENDORBIN = /usr/local/bin
DESTINSTALLVENDORBIN = $(DESTDIR)$(INSTALLVENDORBIN)
INSTALLSCRIPT = /usr/bin
DESTINSTALLSCRIPT = $(DESTDIR)$(INSTALLSCRIPT)
INSTALLSITESCRIPT = /usr/local/bin
DESTINSTALLSITESCRIPT = $(DESTDIR)$(INSTALLSITESCRIPT)
INSTALLVENDORSCRIPT = /usr/local/bin
DESTINSTALLVENDORSCRIPT = $(DESTDIR)$(INSTALLVENDORSCRIPT)
INSTALLMAN1DIR = /usr/share/man/man1
DESTINSTALLMAN1DIR = $(DESTDIR)$(INSTALLMAN1DIR)
INSTALLSITEMAN1DIR = /usr/local/share/man/man1
DESTINSTALLSITEMAN1DIR = $(DESTDIR)$(INSTALLSITEMAN1DIR)
INSTALLVENDORMAN1DIR = /usr/local/share/man/man1
DESTINSTALLVENDORMAN1DIR = $(DESTDIR)$(INSTALLVENDORMAN1DIR)
INSTALLMAN3DIR = /usr/share/man/man3
DESTINSTALLMAN3DIR = $(DESTDIR)$(INSTALLMAN3DIR)
INSTALLSITEMAN3DIR = /usr/local/share/man/man3
DESTINSTALLSITEMAN3DIR = $(DESTDIR)$(INSTALLSITEMAN3DIR)
INSTALLVENDORMAN3DIR = /usr/local/share/man/man3
DESTINSTALLVENDORMAN3DIR = $(DESTDIR)$(INSTALLVENDORMAN3DIR)
PERL_LIB = /System/Library/Perl/5.18
PERL_ARCHLIB = /System/Library/Perl/5.18/darwin-thread-multi-2level
LIBPERL_A = libperl.a
FIRST_MAKEFILE = Makefile
MAKEFILE_OLD = Makefile.old
MAKE_APERL_FILE = Makefile.aperl
PERLMAINCC = $(CC)
PERL_INC = /System/Library/Perl/5.18/darwin-thread-multi-2level/CORE
PERL = /usr/bin/perl
FULLPERL = /usr/bin/perl
ABSPERL = $(PERL)
PERLRUN = $(PERL)
FULLPERLRUN = $(FULLPERL)
ABSPERLRUN = $(ABSPERL)
PERLRUNINST = $(PERLRUN) "-I$(INST_ARCHLIB)" "-I$(INST_LIB)"
FULLPERLRUNINST = $(FULLPERLRUN) "-I$(INST_ARCHLIB)" "-I$(INST_LIB)"
ABSPERLRUNINST = $(ABSPERLRUN) "-I$(INST_ARCHLIB)" "-I$(INST_LIB)"
PERL_CORE = 0
PERM_DIR = 755
PERM_RW = 644
PERM_RWX = 755

MAKEMAKER   = /System/Library/Perl/5.18/ExtUtils/MakeMaker.pm
MM_VERSION  = 6.66
MM_REVISION = 66600

# FULLEXT = Pathname for extension directory (eg Foo/Bar/Oracle).
# BASEEXT = Basename part of FULLEXT. May be just equal FULLEXT. (eg Oracle)
# PARENT_NAME = NAME without BASEEXT and no trailing :: (eg Foo::Bar)
# DLBASE  = Basename part of dynamic library. May be just equal BASEEXT.
MAKE = make
FULLEXT = JBrowse
BASEEXT = JBrowse
PARENT_NAME = 
DLBASE = $(BASEEXT)
VERSION_FROM = 
OBJECT = 
LDFROM = $(OBJECT)
LINKTYPE = dynamic
BOOTDEP = 

# Handy lists of source code files:
XS_FILES = 
C_FILES  = 
O_FILES  = 
H_FILES  = 
MAN1PODS = bin/add-bam-track.pl \
	bin/add-bw-track.pl \
	bin/add-json.pl \
	bin/add-track-json.pl \
	bin/biodb-to-json.pl \
	bin/draw-basepair-track.pl \
	bin/flatfile-to-json.pl \
	bin/generate-names.pl \
	bin/json2conf.pl \
	bin/maker2jbrowse \
	bin/new-plugin.pl \
	bin/prepare-refseqs.pl \
	bin/remove-track.pl \
	bin/ucsc-to-json.pl
MAN3PODS = src/perl5/ArrayRepr.pm \
	src/perl5/Bio/FeatureIO/bed.pm \
	src/perl5/Bio/JBrowse/Cmd.pm \
	src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm \
	src/perl5/Bio/JBrowse/Cmd/IndexNames.pm \
	src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm \
	src/perl5/Bio/JBrowse/ExternalSorter.pm \
	src/perl5/Bio/JBrowse/FeatureStream.pm \
	src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm \
	src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	src/perl5/Bio/JBrowse/HashStore.pm \
	src/perl5/Bio/JBrowse/JSON.pm \
	src/perl5/FeatureTrack.pm \
	src/perl5/GenomeDB.pm \
	src/perl5/ImageTrack.pm \
	src/perl5/ImageTrackRenderer.pm \
	src/perl5/IntervalStore.pm \
	src/perl5/JBlibs.pm \
	src/perl5/JsonFileStorage.pm \
	src/perl5/LazyNCList.pm \
	src/perl5/LazyPatricia.pm \
	src/perl5/NCLSorter.pm \
	src/perl5/NCList.pm \
	src/perl5/NameHandler.pm \
	src/perl5/TiledImage.pm \
	src/perl5/TrackImage.pm

SDKROOT := $(shell xcrun --show-sdk-path)
PERL_SYSROOT = $(SDKROOT)

# Where is the Config information that we are using/depend on
CONFIGDEP = $(PERL_ARCHLIB)$(DFSEP)Config.pm $(PERL_SYSROOT)$(PERL_INC)$(DFSEP)config.h

# Where to build things
INST_LIBDIR      = $(INST_LIB)
INST_ARCHLIBDIR  = $(INST_ARCHLIB)

INST_AUTODIR     = $(INST_LIB)/auto/$(FULLEXT)
INST_ARCHAUTODIR = $(INST_ARCHLIB)/auto/$(FULLEXT)

INST_STATIC      = 
INST_DYNAMIC     = 
INST_BOOT        = 

# Extra linker info
EXPORT_LIST        = 
PERL_ARCHIVE       = 
PERL_ARCHIVE_AFTER = 


TO_INST_PM = src/perl5/ArrayRepr.pm \
	src/perl5/Bio/FeatureIO/bed.pm \
	src/perl5/Bio/JBrowse/Cmd.pm \
	src/perl5/Bio/JBrowse/Cmd/BioDBToJson.pm \
	src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm \
	src/perl5/Bio/JBrowse/Cmd/IndexNames.pm \
	src/perl5/Bio/JBrowse/Cmd/NCFormatter.pm \
	src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm \
	src/perl5/Bio/JBrowse/ConfigurationFile.pm \
	src/perl5/Bio/JBrowse/ConfigurationManager.pm \
	src/perl5/Bio/JBrowse/ExternalSorter.pm \
	src/perl5/Bio/JBrowse/FeatureStream.pm \
	src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm \
	src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	src/perl5/Bio/JBrowse/HashStore.pm \
	src/perl5/Bio/JBrowse/JSON.pm \
	src/perl5/FeatureTrack.pm \
	src/perl5/GenomeDB.pm \
	src/perl5/ImageTrack.pm \
	src/perl5/ImageTrackRenderer.pm \
	src/perl5/IntervalStore.pm \
	src/perl5/JBlibs.pm \
	src/perl5/JsonFileStorage.pm \
	src/perl5/LazyNCList.pm \
	src/perl5/LazyPatricia.pm \
	src/perl5/NCLSorter.pm \
	src/perl5/NCList.pm \
	src/perl5/NameHandler.pm \
	src/perl5/TiledImage.pm \
	src/perl5/TiledImage/DBPrimStorage.pm \
	src/perl5/TiledImage/MemoryPrimStorage.pm \
	src/perl5/TrackImage.pm

PM_TO_BLIB = src/perl5/Bio/JBrowse/FeatureStream.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream.pm \
	src/perl5/NameHandler.pm \
	$(INST_LIB)/NameHandler.pm \
	src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	src/perl5/Bio/JBrowse/ExternalSorter.pm \
	$(INST_LIB)/Bio/JBrowse/ExternalSorter.pm \
	src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	src/perl5/LazyPatricia.pm \
	$(INST_LIB)/LazyPatricia.pm \
	src/perl5/Bio/FeatureIO/bed.pm \
	$(INST_LIB)/Bio/FeatureIO/bed.pm \
	src/perl5/NCLSorter.pm \
	$(INST_LIB)/NCLSorter.pm \
	src/perl5/ArrayRepr.pm \
	$(INST_LIB)/ArrayRepr.pm \
	src/perl5/TiledImage.pm \
	$(INST_LIB)/TiledImage.pm \
	src/perl5/Bio/JBrowse/HashStore.pm \
	$(INST_LIB)/Bio/JBrowse/HashStore.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank.pm \
	src/perl5/Bio/JBrowse/Cmd.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd.pm \
	src/perl5/IntervalStore.pm \
	$(INST_LIB)/IntervalStore.pm \
	src/perl5/Bio/JBrowse/Cmd/NCFormatter.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/NCFormatter.pm \
	src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream/BioPerl.pm \
	src/perl5/Bio/JBrowse/ConfigurationManager.pm \
	$(INST_LIB)/Bio/JBrowse/ConfigurationManager.pm \
	src/perl5/ImageTrackRenderer.pm \
	$(INST_LIB)/ImageTrackRenderer.pm \
	src/perl5/TrackImage.pm \
	$(INST_LIB)/TrackImage.pm \
	src/perl5/FeatureTrack.pm \
	$(INST_LIB)/FeatureTrack.pm \
	src/perl5/LazyNCList.pm \
	$(INST_LIB)/LazyNCList.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm \
	src/perl5/Bio/JBrowse/Cmd/IndexNames.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/IndexNames.pm \
	src/perl5/JBlibs.pm \
	$(INST_LIB)/JBlibs.pm \
	src/perl5/GenomeDB.pm \
	$(INST_LIB)/GenomeDB.pm \
	src/perl5/JsonFileStorage.pm \
	$(INST_LIB)/JsonFileStorage.pm \
	src/perl5/TiledImage/MemoryPrimStorage.pm \
	$(INST_LIB)/TiledImage/MemoryPrimStorage.pm \
	src/perl5/ImageTrack.pm \
	$(INST_LIB)/ImageTrack.pm \
	src/perl5/TiledImage/DBPrimStorage.pm \
	$(INST_LIB)/TiledImage/DBPrimStorage.pm \
	src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/RemoveTrack.pm \
	src/perl5/NCList.pm \
	$(INST_LIB)/NCList.pm \
	src/perl5/Bio/JBrowse/JSON.pm \
	$(INST_LIB)/Bio/JBrowse/JSON.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	$(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	src/perl5/Bio/JBrowse/ConfigurationFile.pm \
	$(INST_LIB)/Bio/JBrowse/ConfigurationFile.pm \
	src/perl5/Bio/JBrowse/Cmd/BioDBToJson.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/BioDBToJson.pm \
	src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm \
	$(INST_LIB)/Bio/JBrowse/Cmd/FormatSequences.pm


# --- MakeMaker platform_constants section:
MM_Unix_VERSION = 6.66
PERL_MALLOC_DEF = -DPERL_EXTMALLOC_DEF -Dmalloc=Perl_malloc -Dfree=Perl_mfree -Drealloc=Perl_realloc -Dcalloc=Perl_calloc


# --- MakeMaker tool_autosplit section:
# Usage: $(AUTOSPLITFILE) FileToSplit AutoDirToSplitInto
AUTOSPLITFILE = $(ABSPERLRUN)  -e 'use AutoSplit;  autosplit($$$$ARGV[0], $$$$ARGV[1], 0, 1, 1)' --



# --- MakeMaker tool_xsubpp section:


# --- MakeMaker tools_other section:
SHELL = /bin/sh
CHMOD = chmod
CP = cp
MV = mv
NOOP = $(TRUE)
NOECHO = @
RM_F = rm -f
RM_RF = rm -rf
TEST_F = test -f
TOUCH = touch
UMASK_NULL = umask 0
DEV_NULL = > /dev/null 2>&1
MKPATH = $(ABSPERLRUN) -MExtUtils::Command -e 'mkpath' --
EQUALIZE_TIMESTAMP = $(ABSPERLRUN) -MExtUtils::Command -e 'eqtime' --
FALSE = false
TRUE = true
ECHO = echo
ECHO_N = echo -n
UNINST = 0
VERBINST = 0
MOD_INSTALL = $(ABSPERLRUN) -MExtUtils::Install -e 'install([ from_to => {@ARGV}, verbose => '\''$(VERBINST)'\'', uninstall_shadows => '\''$(UNINST)'\'', dir_mode => '\''$(PERM_DIR)'\'' ]);' --
DOC_INSTALL = $(ABSPERLRUN) -MExtUtils::Command::MM -e 'perllocal_install' --
UNINSTALL = $(ABSPERLRUN) -MExtUtils::Command::MM -e 'uninstall' --
WARN_IF_OLD_PACKLIST = $(ABSPERLRUN) -MExtUtils::Command::MM -e 'warn_if_old_packlist' --
MACROSTART = 
MACROEND = 
USEMAKEFILE = -f
FIXIN = $(ABSPERLRUN) -MExtUtils::MY -e 'MY->fixin(shift)' --


# --- MakeMaker makemakerdflt section:
makemakerdflt : all
	$(NOECHO) $(NOOP)


# --- MakeMaker dist section skipped.

# --- MakeMaker macro section:


# --- MakeMaker depend section:


# --- MakeMaker cflags section:


# --- MakeMaker const_loadlibs section:


# --- MakeMaker const_cccmd section:


# --- MakeMaker post_constants section:


# --- MakeMaker pasthru section:

PASTHRU = LIBPERL_A="$(LIBPERL_A)"\
	LINKTYPE="$(LINKTYPE)"\
	PREFIX="$(PREFIX)"


# --- MakeMaker special_targets section:
.SUFFIXES : .xs .c .C .cpp .i .s .cxx .cc $(OBJ_EXT)

.PHONY: all config static dynamic test linkext manifest blibdirs clean realclean disttest distdir



# --- MakeMaker c_o section:


# --- MakeMaker xs_c section:


# --- MakeMaker xs_o section:


# --- MakeMaker top_targets section:
all :: pure_all manifypods
	$(NOECHO) $(NOOP)


pure_all :: config pm_to_blib subdirs linkext
	$(NOECHO) $(NOOP)

subdirs :: $(MYEXTLIB)
	$(NOECHO) $(NOOP)

config :: $(FIRST_MAKEFILE) blibdirs
	$(NOECHO) $(NOOP)

help :
	perldoc ExtUtils::MakeMaker


# --- MakeMaker blibdirs section:
blibdirs : $(INST_LIBDIR)$(DFSEP).exists $(INST_ARCHLIB)$(DFSEP).exists $(INST_AUTODIR)$(DFSEP).exists $(INST_ARCHAUTODIR)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists $(INST_SCRIPT)$(DFSEP).exists $(INST_MAN1DIR)$(DFSEP).exists $(INST_MAN3DIR)$(DFSEP).exists
	$(NOECHO) $(NOOP)

# Backwards compat with 6.18 through 6.25
blibdirs.ts : blibdirs
	$(NOECHO) $(NOOP)

$(INST_LIBDIR)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_LIBDIR)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_LIBDIR)
	$(NOECHO) $(TOUCH) $(INST_LIBDIR)$(DFSEP).exists

$(INST_ARCHLIB)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_ARCHLIB)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_ARCHLIB)
	$(NOECHO) $(TOUCH) $(INST_ARCHLIB)$(DFSEP).exists

$(INST_AUTODIR)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_AUTODIR)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_AUTODIR)
	$(NOECHO) $(TOUCH) $(INST_AUTODIR)$(DFSEP).exists

$(INST_ARCHAUTODIR)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_ARCHAUTODIR)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_ARCHAUTODIR)
	$(NOECHO) $(TOUCH) $(INST_ARCHAUTODIR)$(DFSEP).exists

$(INST_BIN)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_BIN)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_BIN)
	$(NOECHO) $(TOUCH) $(INST_BIN)$(DFSEP).exists

$(INST_SCRIPT)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_SCRIPT)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_SCRIPT)
	$(NOECHO) $(TOUCH) $(INST_SCRIPT)$(DFSEP).exists

$(INST_MAN1DIR)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_MAN1DIR)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_MAN1DIR)
	$(NOECHO) $(TOUCH) $(INST_MAN1DIR)$(DFSEP).exists

$(INST_MAN3DIR)$(DFSEP).exists :: Makefile.PL
	$(NOECHO) $(MKPATH) $(INST_MAN3DIR)
	$(NOECHO) $(CHMOD) $(PERM_DIR) $(INST_MAN3DIR)
	$(NOECHO) $(TOUCH) $(INST_MAN3DIR)$(DFSEP).exists



# --- MakeMaker linkext section:

linkext :: $(LINKTYPE)
	$(NOECHO) $(NOOP)


# --- MakeMaker dlsyms section:


# --- MakeMaker dynamic section:

dynamic :: $(FIRST_MAKEFILE) $(INST_DYNAMIC) $(INST_BOOT)
	$(NOECHO) $(NOOP)


# --- MakeMaker dynamic_bs section:

BOOTSTRAP =


# --- MakeMaker dynamic_lib section:


# --- MakeMaker static section:

## $(INST_PM) has been moved to the all: target.
## It remains here for awhile to allow for old usage: "make static"
static :: $(FIRST_MAKEFILE) $(INST_STATIC)
	$(NOECHO) $(NOOP)


# --- MakeMaker static_lib section:


# --- MakeMaker manifypods section:

POD2MAN_EXE = $(PERLRUN) "-MExtUtils::Command::MM" -e pod2man "--"
POD2MAN = $(POD2MAN_EXE)


manifypods : pure_all  \
	bin/add-json.pl \
	bin/ucsc-to-json.pl \
	bin/new-plugin.pl \
	bin/flatfile-to-json.pl \
	bin/remove-track.pl \
	bin/generate-names.pl \
	bin/biodb-to-json.pl \
	bin/draw-basepair-track.pl \
	bin/add-track-json.pl \
	bin/prepare-refseqs.pl \
	bin/maker2jbrowse \
	bin/add-bam-track.pl \
	bin/add-bw-track.pl \
	bin/json2conf.pl \
	src/perl5/ArrayRepr.pm \
	src/perl5/NCList.pm \
	src/perl5/Bio/JBrowse/JSON.pm \
	src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm \
	src/perl5/Bio/FeatureIO/bed.pm \
	src/perl5/NCLSorter.pm \
	src/perl5/ImageTrack.pm \
	src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm \
	src/perl5/Bio/JBrowse/HashStore.pm \
	src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	src/perl5/TiledImage.pm \
	src/perl5/NameHandler.pm \
	src/perl5/FeatureTrack.pm \
	src/perl5/TrackImage.pm \
	src/perl5/ImageTrackRenderer.pm \
	src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm \
	src/perl5/Bio/JBrowse/FeatureStream.pm \
	src/perl5/Bio/JBrowse/Cmd.pm \
	src/perl5/IntervalStore.pm \
	src/perl5/LazyPatricia.pm \
	src/perl5/JsonFileStorage.pm \
	src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	src/perl5/GenomeDB.pm \
	src/perl5/JBlibs.pm \
	src/perl5/Bio/JBrowse/Cmd/IndexNames.pm \
	src/perl5/Bio/JBrowse/ExternalSorter.pm \
	src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	src/perl5/LazyNCList.pm
	$(NOECHO) $(POD2MAN) --section=1 --perm_rw=$(PERM_RW) \
	  bin/add-json.pl $(INST_MAN1DIR)/add-json.pl.$(MAN1EXT) \
	  bin/ucsc-to-json.pl $(INST_MAN1DIR)/ucsc-to-json.pl.$(MAN1EXT) \
	  bin/new-plugin.pl $(INST_MAN1DIR)/new-plugin.pl.$(MAN1EXT) \
	  bin/flatfile-to-json.pl $(INST_MAN1DIR)/flatfile-to-json.pl.$(MAN1EXT) \
	  bin/remove-track.pl $(INST_MAN1DIR)/remove-track.pl.$(MAN1EXT) \
	  bin/generate-names.pl $(INST_MAN1DIR)/generate-names.pl.$(MAN1EXT) \
	  bin/biodb-to-json.pl $(INST_MAN1DIR)/biodb-to-json.pl.$(MAN1EXT) \
	  bin/draw-basepair-track.pl $(INST_MAN1DIR)/draw-basepair-track.pl.$(MAN1EXT) \
	  bin/add-track-json.pl $(INST_MAN1DIR)/add-track-json.pl.$(MAN1EXT) \
	  bin/prepare-refseqs.pl $(INST_MAN1DIR)/prepare-refseqs.pl.$(MAN1EXT) \
	  bin/maker2jbrowse $(INST_MAN1DIR)/maker2jbrowse.$(MAN1EXT) \
	  bin/add-bam-track.pl $(INST_MAN1DIR)/add-bam-track.pl.$(MAN1EXT) \
	  bin/add-bw-track.pl $(INST_MAN1DIR)/add-bw-track.pl.$(MAN1EXT) \
	  bin/json2conf.pl $(INST_MAN1DIR)/json2conf.pl.$(MAN1EXT) 
	$(NOECHO) $(POD2MAN) --section=3 --perm_rw=$(PERM_RW) \
	  src/perl5/ArrayRepr.pm $(INST_MAN3DIR)/src::perl5::ArrayRepr.$(MAN3EXT) \
	  src/perl5/NCList.pm $(INST_MAN3DIR)/src::perl5::NCList.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/JSON.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::JSON.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::Cmd::RemoveTrack.$(MAN3EXT) \
	  src/perl5/Bio/FeatureIO/bed.pm $(INST_MAN3DIR)/src::perl5::Bio::FeatureIO::bed.$(MAN3EXT) \
	  src/perl5/NCLSorter.pm $(INST_MAN3DIR)/src::perl5::NCLSorter.$(MAN3EXT) \
	  src/perl5/ImageTrack.pm $(INST_MAN3DIR)/src::perl5::ImageTrack.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::Cmd::FormatSequences.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::FeatureStream::Genbank.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/HashStore.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::HashStore.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::FeatureStream::Genbank::Parser.$(MAN3EXT) \
	  src/perl5/TiledImage.pm $(INST_MAN3DIR)/src::perl5::TiledImage.$(MAN3EXT) \
	  src/perl5/NameHandler.pm $(INST_MAN3DIR)/src::perl5::NameHandler.$(MAN3EXT) \
	  src/perl5/FeatureTrack.pm $(INST_MAN3DIR)/src::perl5::FeatureTrack.$(MAN3EXT) \
	  src/perl5/TrackImage.pm $(INST_MAN3DIR)/src::perl5::TrackImage.$(MAN3EXT) \
	  src/perl5/ImageTrackRenderer.pm $(INST_MAN3DIR)/src::perl5::ImageTrackRenderer.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::FeatureStream::BioPerl.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/FeatureStream.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::FeatureStream.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/Cmd.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::Cmd.$(MAN3EXT) \
	  src/perl5/IntervalStore.pm $(INST_MAN3DIR)/src::perl5::IntervalStore.$(MAN3EXT) \
	  src/perl5/LazyPatricia.pm $(INST_MAN3DIR)/src::perl5::LazyPatricia.$(MAN3EXT) \
	  src/perl5/JsonFileStorage.pm $(INST_MAN3DIR)/src::perl5::JsonFileStorage.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::Cmd::FlatFileToJson.$(MAN3EXT) \
	  src/perl5/GenomeDB.pm $(INST_MAN3DIR)/src::perl5::GenomeDB.$(MAN3EXT) \
	  src/perl5/JBlibs.pm $(INST_MAN3DIR)/src::perl5::JBlibs.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/Cmd/IndexNames.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::Cmd::IndexNames.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/ExternalSorter.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::ExternalSorter.$(MAN3EXT) \
	  src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm $(INST_MAN3DIR)/src::perl5::Bio::JBrowse::FeatureStream::GFF3_LowLevel.$(MAN3EXT) \
	  src/perl5/LazyNCList.pm $(INST_MAN3DIR)/src::perl5::LazyNCList.$(MAN3EXT) 




# --- MakeMaker processPL section:


# --- MakeMaker installbin section:

EXE_FILES = bin/ucsc-to-json.pl bin/remove-track.pl bin/generate-names.pl bin/maker2jbrowse bin/prepare-refseqs.pl bin/biodb-to-json.pl bin/draw-basepair-track.pl bin/flatfile-to-json.pl bin/new-plugin.pl bin/add-bw-track.pl bin/add-bam-track.pl bin/add-json.pl bin/add-track-json.pl bin/json2conf.pl

pure_all :: $(INST_SCRIPT)/draw-basepair-track.pl $(INST_SCRIPT)/biodb-to-json.pl $(INST_SCRIPT)/generate-names.pl $(INST_SCRIPT)/ucsc-to-json.pl $(INST_SCRIPT)/new-plugin.pl $(INST_SCRIPT)/flatfile-to-json.pl $(INST_SCRIPT)/remove-track.pl $(INST_SCRIPT)/add-json.pl $(INST_SCRIPT)/json2conf.pl $(INST_SCRIPT)/add-bw-track.pl $(INST_SCRIPT)/add-bam-track.pl $(INST_SCRIPT)/add-track-json.pl $(INST_SCRIPT)/prepare-refseqs.pl $(INST_SCRIPT)/maker2jbrowse
	$(NOECHO) $(NOOP)

realclean ::
	$(RM_F) \
	  $(INST_SCRIPT)/draw-basepair-track.pl $(INST_SCRIPT)/biodb-to-json.pl \
	  $(INST_SCRIPT)/generate-names.pl $(INST_SCRIPT)/ucsc-to-json.pl \
	  $(INST_SCRIPT)/new-plugin.pl $(INST_SCRIPT)/flatfile-to-json.pl \
	  $(INST_SCRIPT)/remove-track.pl $(INST_SCRIPT)/add-json.pl \
	  $(INST_SCRIPT)/json2conf.pl $(INST_SCRIPT)/add-bw-track.pl \
	  $(INST_SCRIPT)/add-bam-track.pl $(INST_SCRIPT)/add-track-json.pl \
	  $(INST_SCRIPT)/prepare-refseqs.pl $(INST_SCRIPT)/maker2jbrowse 

$(INST_SCRIPT)/draw-basepair-track.pl : bin/draw-basepair-track.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/draw-basepair-track.pl
	$(CP) bin/draw-basepair-track.pl $(INST_SCRIPT)/draw-basepair-track.pl
	$(FIXIN) $(INST_SCRIPT)/draw-basepair-track.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/draw-basepair-track.pl

$(INST_SCRIPT)/biodb-to-json.pl : bin/biodb-to-json.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/biodb-to-json.pl
	$(CP) bin/biodb-to-json.pl $(INST_SCRIPT)/biodb-to-json.pl
	$(FIXIN) $(INST_SCRIPT)/biodb-to-json.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/biodb-to-json.pl

$(INST_SCRIPT)/generate-names.pl : bin/generate-names.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/generate-names.pl
	$(CP) bin/generate-names.pl $(INST_SCRIPT)/generate-names.pl
	$(FIXIN) $(INST_SCRIPT)/generate-names.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/generate-names.pl

$(INST_SCRIPT)/ucsc-to-json.pl : bin/ucsc-to-json.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/ucsc-to-json.pl
	$(CP) bin/ucsc-to-json.pl $(INST_SCRIPT)/ucsc-to-json.pl
	$(FIXIN) $(INST_SCRIPT)/ucsc-to-json.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/ucsc-to-json.pl

$(INST_SCRIPT)/new-plugin.pl : bin/new-plugin.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/new-plugin.pl
	$(CP) bin/new-plugin.pl $(INST_SCRIPT)/new-plugin.pl
	$(FIXIN) $(INST_SCRIPT)/new-plugin.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/new-plugin.pl

$(INST_SCRIPT)/flatfile-to-json.pl : bin/flatfile-to-json.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/flatfile-to-json.pl
	$(CP) bin/flatfile-to-json.pl $(INST_SCRIPT)/flatfile-to-json.pl
	$(FIXIN) $(INST_SCRIPT)/flatfile-to-json.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/flatfile-to-json.pl

$(INST_SCRIPT)/remove-track.pl : bin/remove-track.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/remove-track.pl
	$(CP) bin/remove-track.pl $(INST_SCRIPT)/remove-track.pl
	$(FIXIN) $(INST_SCRIPT)/remove-track.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/remove-track.pl

$(INST_SCRIPT)/add-json.pl : bin/add-json.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/add-json.pl
	$(CP) bin/add-json.pl $(INST_SCRIPT)/add-json.pl
	$(FIXIN) $(INST_SCRIPT)/add-json.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/add-json.pl

$(INST_SCRIPT)/json2conf.pl : bin/json2conf.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/json2conf.pl
	$(CP) bin/json2conf.pl $(INST_SCRIPT)/json2conf.pl
	$(FIXIN) $(INST_SCRIPT)/json2conf.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/json2conf.pl

$(INST_SCRIPT)/add-bw-track.pl : bin/add-bw-track.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/add-bw-track.pl
	$(CP) bin/add-bw-track.pl $(INST_SCRIPT)/add-bw-track.pl
	$(FIXIN) $(INST_SCRIPT)/add-bw-track.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/add-bw-track.pl

$(INST_SCRIPT)/add-bam-track.pl : bin/add-bam-track.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/add-bam-track.pl
	$(CP) bin/add-bam-track.pl $(INST_SCRIPT)/add-bam-track.pl
	$(FIXIN) $(INST_SCRIPT)/add-bam-track.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/add-bam-track.pl

$(INST_SCRIPT)/add-track-json.pl : bin/add-track-json.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/add-track-json.pl
	$(CP) bin/add-track-json.pl $(INST_SCRIPT)/add-track-json.pl
	$(FIXIN) $(INST_SCRIPT)/add-track-json.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/add-track-json.pl

$(INST_SCRIPT)/prepare-refseqs.pl : bin/prepare-refseqs.pl $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/prepare-refseqs.pl
	$(CP) bin/prepare-refseqs.pl $(INST_SCRIPT)/prepare-refseqs.pl
	$(FIXIN) $(INST_SCRIPT)/prepare-refseqs.pl
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/prepare-refseqs.pl

$(INST_SCRIPT)/maker2jbrowse : bin/maker2jbrowse $(FIRST_MAKEFILE) $(INST_SCRIPT)$(DFSEP).exists $(INST_BIN)$(DFSEP).exists
	$(NOECHO) $(RM_F) $(INST_SCRIPT)/maker2jbrowse
	$(CP) bin/maker2jbrowse $(INST_SCRIPT)/maker2jbrowse
	$(FIXIN) $(INST_SCRIPT)/maker2jbrowse
	-$(NOECHO) $(CHMOD) $(PERM_RWX) $(INST_SCRIPT)/maker2jbrowse



# --- MakeMaker subdirs section:

# none

# --- MakeMaker clean_subdirs section:
clean_subdirs :
	$(NOECHO) $(NOOP)


# --- MakeMaker clean section:

# Delete temporary files but do not touch installed files. We don't delete
# the Makefile here so a later make realclean still has a makefile to use.

clean :: clean_subdirs
	- $(RM_F) \
	  *$(OBJ_EXT) $(INST_ARCHAUTODIR)/extralibs.ld \
	  core.[0-9][0-9] perlmain.c \
	  $(BASEEXT).bso perl \
	  lib$(BASEEXT).def tmon.out \
	  blibdirs.ts so_locations \
	  $(INST_ARCHAUTODIR)/extralibs.all $(BASEEXT).def \
	  perl$(EXE_EXT) $(BOOTSTRAP) \
	  core core.*perl.*.? \
	  pm_to_blib MYMETA.yml \
	  *perl.core mon.out \
	  $(MAKE_APERL_FILE) perl.exe \
	  MYMETA.json core.[0-9][0-9][0-9][0-9][0-9] \
	  core.[0-9] pm_to_blib.ts \
	  $(BASEEXT).exp *$(LIB_EXT) \
	  core.[0-9][0-9][0-9][0-9] core.[0-9][0-9][0-9] \
	  $(BASEEXT).x 
	- $(RM_RF) \
	  blib 
	- $(MV) $(FIRST_MAKEFILE) $(MAKEFILE_OLD) $(DEV_NULL)


# --- MakeMaker realclean_subdirs section:
realclean_subdirs :
	$(NOECHO) $(NOOP)


# --- MakeMaker realclean section:
# Delete temporary files (via clean) and also delete dist files
realclean purge ::  clean realclean_subdirs
	- $(RM_F) \
	  $(MAKEFILE_OLD) $(FIRST_MAKEFILE) 
	- $(RM_RF) \
	  $(DISTVNAME) 


# --- MakeMaker metafile section:
metafile : create_distdir
	$(NOECHO) $(ECHO) Generating META.yml
	$(NOECHO) $(ECHO) '---' > META_new.yml
	$(NOECHO) $(ECHO) 'abstract: '\''A modern web-based genome browser.'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'author:' >> META_new.yml
	$(NOECHO) $(ECHO) '  - '\''Eric Yao, Colin Diesh, & other contributors'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'build_requires:' >> META_new.yml
	$(NOECHO) $(ECHO) '  Capture::Tiny: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  DBD::SQLite: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Test::More: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Test::Warn: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'configure_requires:' >> META_new.yml
	$(NOECHO) $(ECHO) '  ExtUtils::MakeMaker: '\''6.30'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'dynamic_config: 1' >> META_new.yml
	$(NOECHO) $(ECHO) 'generated_by: '\''ExtUtils::MakeMaker version 6.66, CPAN::Meta::Converter version 2.150010'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'license: perl' >> META_new.yml
	$(NOECHO) $(ECHO) 'meta-spec:' >> META_new.yml
	$(NOECHO) $(ECHO) '  url: http://module-build.sourceforge.net/META-spec-v1.4.html' >> META_new.yml
	$(NOECHO) $(ECHO) '  version: '\''1.4'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'name: JBrowse' >> META_new.yml
	$(NOECHO) $(ECHO) 'no_index:' >> META_new.yml
	$(NOECHO) $(ECHO) '  directory:' >> META_new.yml
	$(NOECHO) $(ECHO) '    - t' >> META_new.yml
	$(NOECHO) $(ECHO) '    - inc' >> META_new.yml
	$(NOECHO) $(ECHO) 'requires:' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::Annotation::SimpleValue: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::FeatureIO: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::GFF3::LowLevel: '\''1.8'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::GFF3::LowLevel::Parser: '\''1.8'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::Index::Fasta: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::OntologyIO: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::Root::Version: '\''1.006000'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::SeqFeature::Annotated: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Bio::SeqFeature::Lite: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Carp: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Cwd: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  DBI: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  DB_File: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Data::Dumper: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Devel::Size: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Digest::Crc32: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Exporter: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Fcntl: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Basename: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Copy::Recursive: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Next: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Path: '\''2'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Spec: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Spec::Functions: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  File::Temp: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  FindBin: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Getopt::Long: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Hash::Merge: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Heap::Simple: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Heap::Simple::XS: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  IO::File: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  IO::Uncompress::Gunzip: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  JSON: '\''2'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  JSON::XS: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  List::MoreUtils: '\''0.28'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  List::Util: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  POSIX: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Parse::RecDescent: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  PerlIO::gzip: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Pod::Usage: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Scalar::Util: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  Storable: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  URI::Escape: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  base: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  constant: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  local::lib: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  strict: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  vars: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) '  warnings: '\''0'\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'version: '\'''\''' >> META_new.yml
	$(NOECHO) $(ECHO) 'x_serialization_backend: '\''CPAN::Meta::YAML version 0.018'\''' >> META_new.yml
	-$(NOECHO) $(MV) META_new.yml $(DISTVNAME)/META.yml
	$(NOECHO) $(ECHO) Generating META.json
	$(NOECHO) $(ECHO) '{' > META_new.json
	$(NOECHO) $(ECHO) '   "abstract" : "A modern web-based genome browser.",' >> META_new.json
	$(NOECHO) $(ECHO) '   "author" : [' >> META_new.json
	$(NOECHO) $(ECHO) '      "Eric Yao, Colin Diesh, & other contributors"' >> META_new.json
	$(NOECHO) $(ECHO) '   ],' >> META_new.json
	$(NOECHO) $(ECHO) '   "dynamic_config" : 1,' >> META_new.json
	$(NOECHO) $(ECHO) '   "generated_by" : "ExtUtils::MakeMaker version 6.66, CPAN::Meta::Converter version 2.150010",' >> META_new.json
	$(NOECHO) $(ECHO) '   "license" : [' >> META_new.json
	$(NOECHO) $(ECHO) '      "perl_5"' >> META_new.json
	$(NOECHO) $(ECHO) '   ],' >> META_new.json
	$(NOECHO) $(ECHO) '   "meta-spec" : {' >> META_new.json
	$(NOECHO) $(ECHO) '      "url" : "http://search.cpan.org/perldoc?CPAN::Meta::Spec",' >> META_new.json
	$(NOECHO) $(ECHO) '      "version" : 2' >> META_new.json
	$(NOECHO) $(ECHO) '   },' >> META_new.json
	$(NOECHO) $(ECHO) '   "name" : "JBrowse",' >> META_new.json
	$(NOECHO) $(ECHO) '   "no_index" : {' >> META_new.json
	$(NOECHO) $(ECHO) '      "directory" : [' >> META_new.json
	$(NOECHO) $(ECHO) '         "t",' >> META_new.json
	$(NOECHO) $(ECHO) '         "inc"' >> META_new.json
	$(NOECHO) $(ECHO) '      ]' >> META_new.json
	$(NOECHO) $(ECHO) '   },' >> META_new.json
	$(NOECHO) $(ECHO) '   "prereqs" : {' >> META_new.json
	$(NOECHO) $(ECHO) '      "build" : {' >> META_new.json
	$(NOECHO) $(ECHO) '         "requires" : {' >> META_new.json
	$(NOECHO) $(ECHO) '            "Capture::Tiny" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "DBD::SQLite" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Test::More" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Test::Warn" : "0"' >> META_new.json
	$(NOECHO) $(ECHO) '         }' >> META_new.json
	$(NOECHO) $(ECHO) '      },' >> META_new.json
	$(NOECHO) $(ECHO) '      "configure" : {' >> META_new.json
	$(NOECHO) $(ECHO) '         "requires" : {' >> META_new.json
	$(NOECHO) $(ECHO) '            "ExtUtils::MakeMaker" : "6.30"' >> META_new.json
	$(NOECHO) $(ECHO) '         }' >> META_new.json
	$(NOECHO) $(ECHO) '      },' >> META_new.json
	$(NOECHO) $(ECHO) '      "runtime" : {' >> META_new.json
	$(NOECHO) $(ECHO) '         "requires" : {' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::Annotation::SimpleValue" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::FeatureIO" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::GFF3::LowLevel" : "1.8",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::GFF3::LowLevel::Parser" : "1.8",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::Index::Fasta" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::OntologyIO" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::Root::Version" : "1.006000",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::SeqFeature::Annotated" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Bio::SeqFeature::Lite" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Carp" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Cwd" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "DBI" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "DB_File" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Data::Dumper" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Devel::Size" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Digest::Crc32" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Exporter" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Fcntl" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Basename" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Copy::Recursive" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Next" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Path" : "2",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Spec" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Spec::Functions" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "File::Temp" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "FindBin" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Getopt::Long" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Hash::Merge" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Heap::Simple" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Heap::Simple::XS" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "IO::File" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "IO::Uncompress::Gunzip" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "JSON" : "2",' >> META_new.json
	$(NOECHO) $(ECHO) '            "JSON::XS" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "List::MoreUtils" : "0.28",' >> META_new.json
	$(NOECHO) $(ECHO) '            "List::Util" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "POSIX" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Parse::RecDescent" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "PerlIO::gzip" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Pod::Usage" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Scalar::Util" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "Storable" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "URI::Escape" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "base" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "constant" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "local::lib" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "strict" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "vars" : "0",' >> META_new.json
	$(NOECHO) $(ECHO) '            "warnings" : "0"' >> META_new.json
	$(NOECHO) $(ECHO) '         }' >> META_new.json
	$(NOECHO) $(ECHO) '      }' >> META_new.json
	$(NOECHO) $(ECHO) '   },' >> META_new.json
	$(NOECHO) $(ECHO) '   "release_status" : "stable",' >> META_new.json
	$(NOECHO) $(ECHO) '   "version" : "",' >> META_new.json
	$(NOECHO) $(ECHO) '   "x_serialization_backend" : "JSON::PP version 4.05"' >> META_new.json
	$(NOECHO) $(ECHO) '}' >> META_new.json
	-$(NOECHO) $(MV) META_new.json $(DISTVNAME)/META.json


# --- MakeMaker signature section:
signature :
	cpansign -s


# --- MakeMaker dist_basics section skipped.

# --- MakeMaker dist_core section skipped.

# --- MakeMaker distdir section skipped.

# --- MakeMaker dist_test section skipped.

# --- MakeMaker dist_ci section skipped.

# --- MakeMaker distmeta section:
distmeta : create_distdir metafile
	$(NOECHO) cd $(DISTVNAME) && $(ABSPERLRUN) -MExtUtils::Manifest=maniadd -e 'exit unless -e q{META.yml};' \
	  -e 'eval { maniadd({q{META.yml} => q{Module YAML meta-data (added by MakeMaker)}}) }' \
	  -e '    or print "Could not add META.yml to MANIFEST: $$$${'\''@'\''}\n"' --
	$(NOECHO) cd $(DISTVNAME) && $(ABSPERLRUN) -MExtUtils::Manifest=maniadd -e 'exit unless -f q{META.json};' \
	  -e 'eval { maniadd({q{META.json} => q{Module JSON meta-data (added by MakeMaker)}}) }' \
	  -e '    or print "Could not add META.json to MANIFEST: $$$${'\''@'\''}\n"' --



# --- MakeMaker distsignature section:
distsignature : create_distdir
	$(NOECHO) cd $(DISTVNAME) && $(ABSPERLRUN) -MExtUtils::Manifest=maniadd -e 'eval { maniadd({q{SIGNATURE} => q{Public-key signature (added by MakeMaker)}}) } ' \
	  -e '    or print "Could not add SIGNATURE to MANIFEST: $$$${'\''@'\''}\n"' --
	$(NOECHO) cd $(DISTVNAME) && $(TOUCH) SIGNATURE
	cd $(DISTVNAME) && cpansign -s



# --- MakeMaker install section skipped.

# --- MakeMaker force section:
# Phony target to force checking subdirectories.
FORCE :
	$(NOECHO) $(NOOP)


# --- MakeMaker perldepend section:


# --- MakeMaker makefile section:
# We take a very conservative approach here, but it's worth it.
# We move Makefile to Makefile.old here to avoid gnu make looping.
$(FIRST_MAKEFILE) : Makefile.PL $(CONFIGDEP)
	$(NOECHO) $(ECHO) "Makefile out-of-date with respect to $?"
	$(NOECHO) $(ECHO) "Cleaning current config before rebuilding Makefile..."
	-$(NOECHO) $(RM_F) $(MAKEFILE_OLD)
	-$(NOECHO) $(MV)   $(FIRST_MAKEFILE) $(MAKEFILE_OLD)
	- $(MAKE) $(USEMAKEFILE) $(MAKEFILE_OLD) clean $(DEV_NULL)
	$(PERLRUN) Makefile.PL 
	$(NOECHO) $(ECHO) "==> Your Makefile has been rebuilt. <=="
	$(NOECHO) $(ECHO) "==> Please rerun the $(MAKE) command.  <=="
	$(FALSE)



# --- MakeMaker staticmake section:

# --- MakeMaker makeaperl section ---
MAP_TARGET    = ../perl
FULLPERL      = /usr/bin/perl


# --- MakeMaker test section:

TEST_VERBOSE=0
TEST_TYPE=test_$(LINKTYPE)
TEST_FILE = test.pl
TEST_FILES = t/*.t
TESTDB_SW = -d

testdb :: testdb_$(LINKTYPE)

test :: $(TEST_TYPE) subdirs-test

subdirs-test ::
	$(NOECHO) $(NOOP)


test_dynamic :: pure_all
	PERL_DL_NONLAZY=1 $(FULLPERLRUN) "-MExtUtils::Command::MM" "-e" "test_harness($(TEST_VERBOSE), '$(INST_LIB)', '$(INST_ARCHLIB)')" $(TEST_FILES)

testdb_dynamic :: pure_all
	PERL_DL_NONLAZY=1 $(FULLPERLRUN) $(TESTDB_SW) "-I$(INST_LIB)" "-I$(INST_ARCHLIB)" $(TEST_FILE)

test_ : test_dynamic

test_static :: test_dynamic
testdb_static :: testdb_dynamic


# --- MakeMaker ppd section:
# Creates a PPD (Perl Package Description) for a binary distribution.
ppd :
	$(NOECHO) $(ECHO) '<SOFTPKG NAME="$(DISTNAME)" VERSION="$(VERSION)">' > $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '    <ABSTRACT>A modern web-based genome browser.</ABSTRACT>' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '    <AUTHOR>Eric Yao, Colin Diesh, & other contributors</AUTHOR>' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '    <IMPLEMENTATION>' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::Annotation::SimpleValue" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::FeatureIO" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE VERSION="1.8" NAME="Bio::GFF3::LowLevel" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE VERSION="1.8" NAME="Bio::GFF3::LowLevel::Parser" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::Index::Fasta" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::OntologyIO" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE VERSION="1.006" NAME="Bio::Root::Version" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::SeqFeature::Annotated" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Bio::SeqFeature::Lite" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Carp::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Cwd::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="DBI::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="DB_File::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Data::Dumper" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Devel::Size" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Digest::Crc32" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Exporter::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Fcntl::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Basename" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Copy::Recursive" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Next" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Path" VERSION="2" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Spec" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Spec::Functions" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="File::Temp" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="FindBin::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Getopt::Long" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Hash::Merge" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Heap::Simple" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Heap::Simple::XS" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="IO::File" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="IO::Uncompress::Gunzip" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="JSON::" VERSION="2" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="JSON::XS" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE VERSION="0.28" NAME="List::MoreUtils" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="List::Util" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="POSIX::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Parse::RecDescent" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="PerlIO::gzip" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Pod::Usage" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Scalar::Util" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="Storable::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="URI::Escape" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="base::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="constant::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="local::lib" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="strict::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="vars::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <REQUIRE NAME="warnings::" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <ARCHITECTURE NAME="darwin-thread-multi-2level-5.18" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '        <CODEBASE HREF="" />' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '    </IMPLEMENTATION>' >> $(DISTNAME).ppd
	$(NOECHO) $(ECHO) '</SOFTPKG>' >> $(DISTNAME).ppd


# --- MakeMaker pm_to_blib section:

pm_to_blib : $(FIRST_MAKEFILE) $(TO_INST_PM)
	$(NOECHO) $(ABSPERLRUN) -MExtUtils::Install -e 'pm_to_blib({@ARGV}, '\''$(INST_LIB)/auto'\'', q[$(PM_FILTER)], '\''$(PERM_DIR)'\'')' -- \
	  src/perl5/Bio/JBrowse/FeatureStream.pm $(INST_LIB)/Bio/JBrowse/FeatureStream.pm \
	  src/perl5/NameHandler.pm $(INST_LIB)/NameHandler.pm \
	  src/perl5/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm $(INST_LIB)/Bio/JBrowse/FeatureStream/GFF3_LowLevel.pm \
	  src/perl5/Bio/JBrowse/ExternalSorter.pm $(INST_LIB)/Bio/JBrowse/ExternalSorter.pm \
	  src/perl5/Bio/JBrowse/Cmd/FlatFileToJson.pm $(INST_LIB)/Bio/JBrowse/Cmd/FlatFileToJson.pm \
	  src/perl5/LazyPatricia.pm $(INST_LIB)/LazyPatricia.pm \
	  src/perl5/Bio/FeatureIO/bed.pm $(INST_LIB)/Bio/FeatureIO/bed.pm \
	  src/perl5/NCLSorter.pm $(INST_LIB)/NCLSorter.pm \
	  src/perl5/ArrayRepr.pm $(INST_LIB)/ArrayRepr.pm \
	  src/perl5/TiledImage.pm $(INST_LIB)/TiledImage.pm \
	  src/perl5/Bio/JBrowse/HashStore.pm $(INST_LIB)/Bio/JBrowse/HashStore.pm \
	  src/perl5/Bio/JBrowse/FeatureStream/Genbank.pm $(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank.pm \
	  src/perl5/Bio/JBrowse/Cmd.pm $(INST_LIB)/Bio/JBrowse/Cmd.pm \
	  src/perl5/IntervalStore.pm $(INST_LIB)/IntervalStore.pm \
	  src/perl5/Bio/JBrowse/Cmd/NCFormatter.pm $(INST_LIB)/Bio/JBrowse/Cmd/NCFormatter.pm \
	  src/perl5/Bio/JBrowse/FeatureStream/BioPerl.pm $(INST_LIB)/Bio/JBrowse/FeatureStream/BioPerl.pm \
	  src/perl5/Bio/JBrowse/ConfigurationManager.pm $(INST_LIB)/Bio/JBrowse/ConfigurationManager.pm \
	  src/perl5/ImageTrackRenderer.pm $(INST_LIB)/ImageTrackRenderer.pm \
	  src/perl5/TrackImage.pm $(INST_LIB)/TrackImage.pm \
	  src/perl5/FeatureTrack.pm $(INST_LIB)/FeatureTrack.pm \
	  src/perl5/LazyNCList.pm $(INST_LIB)/LazyNCList.pm \
	  src/perl5/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm $(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/LocationParser.pm \
	  src/perl5/Bio/JBrowse/Cmd/IndexNames.pm $(INST_LIB)/Bio/JBrowse/Cmd/IndexNames.pm \
	  src/perl5/JBlibs.pm $(INST_LIB)/JBlibs.pm \
	  src/perl5/GenomeDB.pm $(INST_LIB)/GenomeDB.pm \
	  src/perl5/JsonFileStorage.pm $(INST_LIB)/JsonFileStorage.pm \
	  src/perl5/TiledImage/MemoryPrimStorage.pm $(INST_LIB)/TiledImage/MemoryPrimStorage.pm \
	  src/perl5/ImageTrack.pm $(INST_LIB)/ImageTrack.pm \
	  src/perl5/TiledImage/DBPrimStorage.pm $(INST_LIB)/TiledImage/DBPrimStorage.pm \
	  src/perl5/Bio/JBrowse/Cmd/RemoveTrack.pm $(INST_LIB)/Bio/JBrowse/Cmd/RemoveTrack.pm \
	  src/perl5/NCList.pm $(INST_LIB)/NCList.pm \
	  src/perl5/Bio/JBrowse/JSON.pm $(INST_LIB)/Bio/JBrowse/JSON.pm \
	  src/perl5/Bio/JBrowse/FeatureStream/Genbank/Parser.pm $(INST_LIB)/Bio/JBrowse/FeatureStream/Genbank/Parser.pm \
	  src/perl5/Bio/JBrowse/ConfigurationFile.pm $(INST_LIB)/Bio/JBrowse/ConfigurationFile.pm \
	  src/perl5/Bio/JBrowse/Cmd/BioDBToJson.pm $(INST_LIB)/Bio/JBrowse/Cmd/BioDBToJson.pm \
	  src/perl5/Bio/JBrowse/Cmd/FormatSequences.pm $(INST_LIB)/Bio/JBrowse/Cmd/FormatSequences.pm 
	$(NOECHO) $(TOUCH) pm_to_blib


# --- MakeMaker selfdocument section:


# --- MakeMaker postamble section:


# End.
