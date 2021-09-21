# Changelog

All notable changes to this project will be documented in this file.

## [Unreleased Mainnet](https://github.com/ArkEcosystem/explorer.ark.io/compare/master...staging)

## [Unreleased Devnet](https://github.com/ArkEcosystem/explorer.ark.io/compare/staging...develop)

## 2021-23-08 (Dexplorer)

### Changed

- implement &quot;chart&quot; component ([#892]) (e0b25d5f, @leMaur)
- persist selected tab on delegate monitor ([#899]) (c6a65a0b, @alfonsobries)
- upgrade laravel framework to version 8.55 ([#901]) (f831a1c3, @Highjhacker)
- wallet info icon color ([#903]) (a8b64fc1, @ItsANameToo)

### Fixed

- status icon disappearing ([#896]) (0ce7c2a5, @alfonsobries)
- disappearing icons on delegate page ([#895]) (06dbf3a9, @alexbarnsley)
- resigned label cropped ([#898]) (ded51820, @alfonsobries)
- truncated block ids inconsistencies ([#897]) (eadf8cb8, @alfonsobries)
- prioritize wallet over blocks in search ([#902]) (abaa59e6, @ItsANameToo)

---

## 2021-08-04 (Dexplorer)

### Added

- statistics (chart) ([#733]) (036338dc, @leMaur)

### Changed

- statistics dropdown wire ignore ([#883]) (02d43e24, @alexbarnsley)
- custom scrollbars in dropdowns ([#879]) (43b60876, @alfonsobries)
- remove configureExplorerDatabase in favour of built-in migrations ([#887]) (e3e0f051, @alfonsobries)
- upgrade arkecosystem/stan ([#884]) (f59aa562, @alfonsobries)

### Fixed

- transaction search taking precedence over block search ([#885]) (f5c9d174, @leMaur)
- broken ID icons ([#888]) (b5dbc74f, @leMaur)
- modal js crash when showing scrollbars ([#889]) (8391b7ee, @ItsANameToo)
- monitor not updating when blocks are missed ([#876]) (f6325cb0, @alexbarnsley)
- transaction icons disappearing when latest transaction table updates ([#890]) (4caea7a4, @leMaur)
- update horizon to support --rest ([#891]) (247d7500, @ItsANameToo)
- use proper address colors for multivote and delegate addresses ([#894]) (f4046c8c, @ItsANameToo)

---

## 2021-07-15 (Dexplorer)

### Changed

- update dark avatar border on table hover (#878) (b74bdcc0, @alexbarnsley)
- include dropdown position js (#880) (df83f84c, @alexbarnsley)

### Fixed

- hide tooltip on small charts (#875) (385cb2ea, @leMaur)
- block gap on safari on statistics page (#877) (3123befc, @leMaur)
- push the generation of a vote report to the queue (#882) (db706909, @crnkovic)

[#733]: https://github.com/ArkEcosystem/explorer.ark.io/pull/733
[#883]: https://github.com/ArkEcosystem/explorer.ark.io/pull/883
[#879]: https://github.com/ArkEcosystem/explorer.ark.io/pull/879
[#887]: https://github.com/ArkEcosystem/explorer.ark.io/pull/887
[#884]: https://github.com/ArkEcosystem/explorer.ark.io/pull/884
[#885]: https://github.com/ArkEcosystem/explorer.ark.io/pull/885
[#888]: https://github.com/ArkEcosystem/explorer.ark.io/pull/888
[#889]: https://github.com/ArkEcosystem/explorer.ark.io/pull/889
[#876]: https://github.com/ArkEcosystem/explorer.ark.io/pull/876
[#890]: https://github.com/ArkEcosystem/explorer.ark.io/pull/890
[#891]: https://github.com/ArkEcosystem/explorer.ark.io/pull/891
[#894]: https://github.com/ArkEcosystem/explorer.ark.io/pull/894
[#892]: https://github.com/ArkEcosystem/explorer.ark.io/pull/892
[#899]: https://github.com/ArkEcosystem/explorer.ark.io/pull/899
[#896]: https://github.com/ArkEcosystem/explorer.ark.io/pull/896
[#895]: https://github.com/ArkEcosystem/explorer.ark.io/pull/895
[#898]: https://github.com/ArkEcosystem/explorer.ark.io/pull/898
[#897]: https://github.com/ArkEcosystem/explorer.ark.io/pull/897
[#901]: https://github.com/ArkEcosystem/explorer.ark.io/pull/901
[#902]: https://github.com/ArkEcosystem/explorer.ark.io/pull/902
[#903]: https://github.com/ArkEcosystem/explorer.ark.io/pull/903